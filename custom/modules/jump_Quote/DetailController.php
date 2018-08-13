
<?php

/**
 * Created by PhpStorm.
 * User: RedZ
 * Date: 7/6/2018
 * Time: 10:10 AM
 */
class DetailController extends SugarController
{

    public function getQuoteDetail($quote_id)
    {
        $data = array();
        global $db;
        $sql = "SELECT
        Sum(jump_discount_cstm.applyamounttoup_c) AS upd,
        Sum(jump_discount_cstm.applyamounttodp_c) AS dpd
        FROM
        jump_discount_cstm
        INNER JOIN jump_quote_jump_discount_1_c ON jump_quote_jump_discount_1_c.jump_quote_jump_discount_1jump_discount_idb = jump_discount_cstm.id_c
        WHERE
        jump_quote_jump_discount_1_c.jump_quote_jump_discount_1jump_quote_ida = '{$quote_id}'";
        $result = $db->query($sql, true, 'Error retrieving sales quote details');

        while ($quote = $db->fetchByAssoc($result)) {

            $data = array(
                'quote' => [
                    'upd' => $quote['upd'],
                    'dpd' => $quote['dpd'],
                    'up' => $this->getUP($quote_id),
                    'acc' => $this->getAcc($quote_id),
                    'ins' => $this->getIns($quote_id),
                    'cha' => $this->getCha($quote_id),
                    'oc' => $this->getoc($quote_id),
                    'dp' => $this->getdp($quote_id),
                    'ndp' => $this->getndp($quote_id),
                    'taf' => $this->gettaf($quote_id),
                    'ma' => $this->getma($quote_id)
                ]
            );
        }
        

        return $data;


    }
    public function getUP($quote_id)
    {
        global $db;
        $up=0;
        $sql1 = "SELECT
        jump_quote_cstm.unitprice_c
        FROM
        jump_quote_cstm
        WHERE
        jump_quote_cstm.id_c = '{$quote_id}'";
        $result = $db->query($sql1, true, 'Error retrieving sales quote details');

        while ($quote1 = $db->fetchByAssoc($result)) {

            $up = $quote1['unitprice_c'];
        }
        return $up;
    } 
    public function getAcc($quote_id)
    {
        global $db;
        $acc=0;
        $sql1 = "SELECT
        Sum(jump_accessories_cstm.price2_c) AS acc
        FROM
        jump_accessories_cstm
        INNER JOIN jump_quote_jump_accessories_1_c ON jump_accessories_cstm.id_c = jump_quote_jump_accessories_1_c.jump_quote_jump_accessories_1jump_accessories_idb
        WHERE
        jump_quote_jump_accessories_1_c.deleted = '0' AND
        jump_accessories_cstm.free_c = '0' AND
        jump_quote_jump_accessories_1_c.jump_quote_jump_accessories_1jump_quote_ida = '{$quote_id}'";
        $result = $db->query($sql1, true, 'Error retrieving sales quote details');

        while ($quote1 = $db->fetchByAssoc($result)) {

            $acc = $quote1['acc'];
        }
        return $acc;
    } 
    public function getIns($quote_id)
    {
        global $db;
        $ins=0;
        $sql1 = "SELECT
        Sum(jump_insurancecharges_cstm.totalinsurancecharges_c) AS ins
        FROM
        jump_insurancecharges_cstm
        INNER JOIN jump_quote_jump_insurancecharges_1_c ON jump_quote_jump_insurancecharges_1_c.jump_quote_jump_insurancecharges_1jump_insurancecharges_idb = jump_insurancecharges_cstm.id_c
        WHERE
        jump_quote_jump_insurancecharges_1_c.deleted = '0' AND
        jump_quote_jump_insurancecharges_1_c.jump_quote_jump_insurancecharges_1jump_quote_ida = '{$quote_id}'";
        $result = $db->query($sql1, true, 'Error retrieving sales quote details');

        while ($quote1 = $db->fetchByAssoc($result)) {

            $ins = $quote1['ins'];
        }
        return $ins;
    } 
    public function getCha($quote_id)
    {
        global $db;
        $cha=0;
        $sql1 = "SELECT
        Sum(jump_autofinancing_cstm.chattelfee_c) AS cha
        FROM
        jump_quote_jump_autofinancing_1_c
        INNER JOIN jump_autofinancing_cstm ON jump_quote_jump_autofinancing_1_c.jump_quote_jump_autofinancing_1jump_autofinancing_idb = jump_autofinancing_cstm.id_c
        WHERE
        jump_quote_jump_autofinancing_1_c.deleted = '0' AND
        jump_autofinancing_cstm.chattelfeefree_c = '0' AND
        jump_quote_jump_autofinancing_1_c.jump_quote_jump_autofinancing_1jump_quote_ida = '{$quote_id}'";
        $result = $db->query($sql1, true, 'Error retrieving sales quote details');

        while ($quote1 = $db->fetchByAssoc($result)) {

            $cha = $quote1['cha'];
        }
        return $cha;
    } 
    public function getoc($quote_id)
    {
        global $db;
        $oc=0;
        $sql1 = "SELECT
        Sum(jump_charges_cstm.actualcost2_c) AS oc
        FROM
        jump_quote_jump_charges_1_c
        INNER JOIN jump_charges_cstm ON jump_quote_jump_charges_1_c.jump_quote_jump_charges_1jump_charges_idb = jump_charges_cstm.id_c
        WHERE
        jump_quote_jump_charges_1_c.deleted = '0' AND
        jump_charges_cstm.free_c = '0' AND
        jump_quote_jump_charges_1_c.jump_quote_jump_charges_1jump_quote_ida = '{$quote_id}'";
        $result = $db->query($sql1, true, 'Error retrieving sales quote details');

        while ($quote1 = $db->fetchByAssoc($result)) {

            $oc = $quote1['oc'];
        }
        return $oc;
    } 
    public function getdp($quote_id)
    {
        global $db;
        $dp=0;
        $sql1 = "SELECT
        jump_autofinancing_cstm.downpayment_c AS dp
        FROM
        jump_quote_jump_autofinancing_1_c
        INNER JOIN jump_autofinancing_cstm ON jump_quote_jump_autofinancing_1_c.jump_quote_jump_autofinancing_1jump_autofinancing_idb = jump_autofinancing_cstm.id_c
        WHERE
        jump_quote_jump_autofinancing_1_c.deleted = '0' AND
        jump_quote_jump_autofinancing_1_c.jump_quote_jump_autofinancing_1jump_quote_ida = '{$quote_id}'";
        $result = $db->query($sql1, true, 'Error retrieving sales quote details');

        while ($quote1 = $db->fetchByAssoc($result)) {

            $dp =$quote1['dp'];
        }
        return $dp;
    } 
    public function getndp($quote_id)
    {
        global $db;
        $ndp =0;
        $sql1 = "SELECT
        jump_autofinancing_cstm.netdownpayment_c AS ndp
        FROM
        jump_quote_jump_autofinancing_1_c
        INNER JOIN jump_autofinancing_cstm ON jump_quote_jump_autofinancing_1_c.jump_quote_jump_autofinancing_1jump_autofinancing_idb = jump_autofinancing_cstm.id_c
        WHERE
        jump_quote_jump_autofinancing_1_c.deleted = '0' AND
        jump_quote_jump_autofinancing_1_c.jump_quote_jump_autofinancing_1jump_quote_ida = '{$quote_id}'";
        $result = $db->query($sql1, true, 'Error retrieving sales quote details');

        while ($quote1 = $db->fetchByAssoc($result)) {

            $ndp = $quote1['ndp'];
        }
        return $ndp;
    } 
    public function gettaf($quote_id)
    {
        global $db;
        $taf =0;
        $sql1 = "SELECT
        jump_autofinancing_cstm.amountfinanced_c AS taf
        FROM
                jump_quote_jump_autofinancing_1_c
                INNER JOIN jump_autofinancing_cstm ON jump_quote_jump_autofinancing_1_c.jump_quote_jump_autofinancing_1jump_autofinancing_idb = jump_autofinancing_cstm.id_c
        WHERE
                jump_quote_jump_autofinancing_1_c.deleted = '0' AND
                jump_quote_jump_autofinancing_1_c.jump_quote_jump_autofinancing_1jump_quote_ida = '{$quote_id}'";
        $result = $db->query($sql1, true, 'Error retrieving sales quote details');

        while ($quote1 = $db->fetchByAssoc($result)) {

            $taf = $quote1['taf'];
        }
        return $taf;
    } 
    public function getma($quote_id)
    {
        global $db;
        $ma =0;
        $sql1 = "SELECT
        jump_autofinancing_cstm.monthlyamortization_c AS ma
        FROM
                jump_quote_jump_autofinancing_1_c
                INNER JOIN jump_autofinancing_cstm ON jump_quote_jump_autofinancing_1_c.jump_quote_jump_autofinancing_1jump_autofinancing_idb = jump_autofinancing_cstm.id_c
        WHERE
                jump_quote_jump_autofinancing_1_c.deleted = '0' AND
                jump_quote_jump_autofinancing_1_c.jump_quote_jump_autofinancing_1jump_quote_ida = '{$quote_id}'";
        $result = $db->query($sql1, true, 'Error retrieving sales quote details');

        while ($quote1 = $db->fetchByAssoc($result)) {

            $ma = $quote1['ma'];
        }
        return $ma;
    } 
}
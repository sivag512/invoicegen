<?php
/**
 * Created by Edison A.
 * Date: 5/24/16
 */
class Form
{

    /**
     * @var array
     */
    private $toData = array(
        'name' => 'to',
        'id' => 'to',
        'rows' => 5,
        'cols' => 40
    );

    /**
     * @var array
     */
    private $fromData = array(
        'name' => 'from',
        'id' => 'from',
        'rows' => 5,
        'cols' => 40
    );

    /**
     * @var array
     */
    private $dateData = array(
        'id' => 'date',
        'type' => 'date'
    );

    /**
     * @var array
     */
    private $dueDateData = array(
        'id' => 'due_date',
        'type' => 'date'
    );

    /**
     * @var array
     */
    private $notesData = array(
        'name' => 'notes',
        'id' => 'notes',
        'rows' => 5,
        'cols' => 40
    );

    /**
     * @var array
     */
    private $termsData = array(
        'name' => 'terms',
        'id' => 'terms',
        'rows' => 5,
        'cols' => 40
    );

    /**
     * @var array
     */
    private $itemData = array(
        'name' => 'item',
        'id' => 'item'
    );

    /**
     * @var array
     */
    private $quantityData = array(
        'name' => 'quantity',
        'id' => 'quantity'
    );

    /**
     * @var array
     */
    private $rateData = array(
        'name' => 'rate',
        'id' => 'rate'
    );

    /**
     * @var array
     */
    private $taxRateData = array(
        'name' => 'tax_rate',
        'id' => 'tax_rate'
    );

    /**
     * @var array
     */
    private $subtotalData = array(
        'name' => 'subtotal',
        'id' => 'subtotal'
    );

    /**
     * @var array
     */
    private $totalData;

    /**
     * @return array
     */
    public function getToData()
    {
        return $this->toData;
    }

    /**
     * @param array $toData
     */
    public function setToData($toData)
    {
        $this->toData = $toData;
    }

    /**
     * @return array
     */
    public function getFromData()
    {
        return $this->fromData;
    }

    /**
     * @param array $fromData
     */
    public function setFromData($fromData)
    {
        $this->fromData = $fromData;
    }

    /**
     * @return array
     */
    public function getDateData()
    {
        return $this->dateData;
    }

    /**
     * @param array $dateData
     */
    public function setDateData($dateData)
    {
        $this->dateData = $dateData;
    }

    /**
     * @return array
     */
    public function getDueDateData()
    {
        return $this->dueDateData;
    }

    /**
     * @param array $dueDateData
     */
    public function setDueDateData($dueDateData)
    {
        $this->dueDateData = $dueDateData;
    }

    /**
     * @return array
     */
    public function getNotesData()
    {
        return $this->notesData;
    }

    /**
     * @param array $notesData
     */
    public function setNotesData($notesData)
    {
        $this->notesData = $notesData;
    }

    /**
     * @return array
     */
    public function getTermsData()
    {
        return $this->termsData;
    }

    /**
     * @param array $termsData
     */
    public function setTermsData($termsData)
    {
        $this->termsData = $termsData;
    }

    /**
     * @return array
     */
    public function getItemData()
    {
        return $this->itemData;
    }

    /**
     * @param array $itemData
     */
    public function setItemData($itemData)
    {
        $this->itemData = $itemData;
    }

    /**
     * @return array
     */
    public function getQuantityData()
    {
        return $this->quantityData;
    }

    /**
     * @param array $quantityData
     */
    public function setQuantityData($quantityData)
    {
        $this->quantityData = $quantityData;
    }

    /**
     * @return array
     */
    public function getRateData()
    {
        return $this->rateData;
    }

    /**
     * @param array $rateData
     */
    public function setRateData($rateData)
    {
        $this->rateData = $rateData;
    }

    /**
     * @return array
     */
    public function getTaxRateData()
    {
        return $this->taxRateData;
    }

    /**
     * @param array $taxRateData
     */
    public function setTaxRateData($taxRateData)
    {
        $this->taxRateData = $taxRateData;
    }

    /**
     * @return array
     */
    public function getSubtotalData()
    {
        return $this->subtotalData;
    }

    /**
     * @param array $subtotalData
     */
    public function setSubtotalData($subtotalData)
    {
        $this->subtotalData = $subtotalData;
    }

    /**
     * @return array
     */
    public function getTotalData()
    {
        return $this->totalData;
    }

    /**
     * @param array $totalData
     */
    public function setTotalData($totalData)
    {
        $this->totalData = $totalData;
    }

}

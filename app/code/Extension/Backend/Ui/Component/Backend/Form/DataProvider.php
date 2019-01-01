<?php
namespace Extension\Backend\Ui\Component\Backend\Form;
 
class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        array $meta = [],
        array $data = []
    ) {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $this->collection = $objectManager->create('\Extension\Backend\Model\Backend')->getCollection();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        //return du lieu ra form edit
        $data = [];
        foreach($this->getCollection()->getItems() as $item){
            $data[$item->getId()] = array('general' => $item->getData());
        }
        return $data;

        // echo $this->getRequestFiledName();exit;
        //lay du lieu tra ve
        return parent::getData();
    }
}
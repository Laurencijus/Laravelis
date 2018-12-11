<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}

// Checkbox'o reiksme paimu su $_POST ir tada per
//  SQL SELECT WHERE stulpelis = POST atrenku rezultatus.
// $parametrai = array("bibliotekos lankytojas_1", "bibliotekos lankytojas_2");

// foreach($parametrai AS $parametras){
//   $if($_GET[$parametras] == "on"){
//     $query .= " AND `" . $parametras . "`= 'TRUE'";
//   }
// }FILTRAVIMO GALIMYBE

// Trumpas aprašymas - tai tekstas, trumpai pristatantis ir apibūdinantis temą. ...
// DITA trumpas aprašymas yra vienas iš būdų pasiekti "pažangų atskleidimą" teminiame rašyme,
// ta prasme, kad pavadinimas išplečiamas į
// trumpą aprašymą, kuris išplečia patį temą, kai vartotojas grįžta į informaciją.

// <?php "short_description
// class Moo_News_Block_Adminhtml_News_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
// {
//     protected function _prepareForm()
//     {
//         $form = new Varien_Data_Form();
//         $this->setForm($form);
//         $fieldset = $form->addFieldset('news_form', array('legend' => Mage::helper('news')->__('Item information')));

//         $fieldset->addField('title', 'text', array(
//             'label'     => Mage::helper('news')->__('Title'),
//             'class'     => 'required-entry',
//             'required'  => true,
//             'name'      => 'title',
//         ));

//         $fieldset->addField('published', 'select', array(
//             'label'     => Mage::helper('news')->__('Published'),
//             'name'      => 'published',
//             'required'  => true,
//             'values'    => array(
//                 array(
//                     'value'     => 1,
//                     'label'     => Mage::helper('news')->__('Yes'),
//                 ),

//                 array(
//                     'value'     => 0,
//                     'label'     => Mage::helper('news')->__('No'),
//                 ),
//             ),
//         ));

//         $fieldset->addField('short_description', 'editor', array(
//             'name'      => 'short_description',
//             'label'     => Mage::helper('news')->__('Short Description'),
//             'title'     => Mage::helper('news')->__('Short Description'),
//             'style'     => 'width:98%; height:200px;',
//             'wysiwyg'   => false,
//             'required'  => true,
//         ));

//         $fieldset->addField('body', 'editor', array(
//             'name'      => 'body',
//             'label'     => Mage::helper('news')->__('Body'),
//             'title'     => Mage::helper('news')->__('Body'),
//             'style'     => 'width:98%; height:400px;',
//             'wysiwyg'   => false,
//             'required'  => true,
//         ));

//         $fieldset->addField('image', 'file', array(
//             'label'     => Mage::helper('news')->__('Image'),
//             'required'  => false,
//             'name'      => 'image',
//         ));

//         if ( Mage::getSingleton('adminhtml/session')->getNewsData() )
//         {
//             $form->setValues(Mage::getSingleton('adminhtml/session')->getNewsData());
//             Mage::getSingleton('adminhtml/session')->setNewsData(null);
//         } elseif ( Mage::registry('news_data') ) {
//             $form->setValues(Mage::registry('news_data')->getData());
//         }

//         return parent::_prepareForm();
//     }
// }

// <?php CONTROLLER CODE

// /**
//  *
//  *
//  */

// class Moo_News_Adminhtml_NewsController extends Mage_Adminhtml_Controller_Action
// {

//     protected function _initAction()
//     {
//         $this->loadLayout()
//             ->_setActiveMenu('news/items')
//             ->_addBreadcrumb(Mage::helper('adminhtml')->__('Items Manager'), Mage::helper('adminhtml')->__('Item Manager'));
//         return $this;
//     }

//     public function indexAction() {
//         $this->_initAction();
//         $this->_addContent($this->getLayout()->createBlock('news/adminhtml_news'));
//         $this->renderLayout();
//     }

//     public function editAction()
//     {
//         $newsId     = $this->getRequest()->getParam('id');
//         $newsModel  = Mage::getModel('news/post')->load($newsId);

//         if ($newsModel->getId() || $newsId == 0) {

//             Mage::register('news_data', $newsModel);

//             $this->loadLayout();
//             $this->_setActiveMenu('news/items');

//             $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item Manager'), Mage::helper('adminhtml')->__('Item Manager'));
//             $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item News'), Mage::helper('adminhtml')->__('Item News'));

//             $this->getLayout()->getBlock('head')->setCanLoadExtJs(true);

//             $this->_addContent($this->getLayout()->createBlock('news/adminhtml_news_edit'))
//                  ->_addLeft($this->getLayout()->createBlock('news/adminhtml_news_edit_tabs'));

//             $this->renderLayout();
//         } else {
//             Mage::getSingleton('adminhtml/session')->addError(Mage::helper('news')->__('Item does not exist'));
//             $this->_redirect('*/*/');
//         }
//     }

//     public function newAction()
//     {
//         $this->_forward('edit');
//     }

//     public function saveAction()
//     {
//         if ( $this->getRequest()->getPost() ) {
//             try {
//                 $postData = $this->getRequest()->getPost();
//                 $newsModel = Mage::getModel('news/post');

//                 $imgFilename = NULL;

//                 //if (isset($postData['image']) && $postData['image'] != '') {
//                 //if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
//                 if (false) {
//                     try {
//                         $uploader = new Varien_File_Uploader('image');

//                         $uploader->setAllowedExtensions(array('jpg','jpeg','gif','png'));
//                         $uploader->setAllowRenameFiles(false);
//                         $uploader->setFilesDispersion(false);

//                         // Set media as the upload dir
//                         $media_path  = Mage::getBaseDir('media');

//                         $imgFilename = $media_path . $postData['image'];

//                         while (file_exists($filename)) {
//                             $pieces = array();

//                             $res = preg_match('/^(.+)_(\d+)$/', $filename, $pieces);

//                             if (!$res) {
//                                 $filename .= '_1';
//                             } else {
//                                 $filename .= '_' . strval(intval($pieces[2]) + 1);
//                             }
//                         }

//                         // Upload the image
//                         $uploader->save($media_path, $postData['image']);
//                     }
//                     catch (Exception $e) {
//                         Mage::log($e);
//                         $this->redirectError(502);
//                     }
//                 } else {
//                     if(isset($postData['image']['delete']) && $postData['image']['delete'] == 1) {
//                         $imgFilename = NULL;
//                     }
//                 }

//                 if(isset($imgFilename))
//                     $newsModel->setImage($imgFilename);

//                 $newsModel->setId($this->getRequest()->getParam('id'))
//                     ->setTitle($postData['title'])
//                     ->setBody($postData['body'])
//                     ->setShortDescription($postData['short_description'])
//                     ->save();

//                 Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('adminhtml')->__('Item was successfully saved'));
//                 Mage::getSingleton('adminhtml/session')->setNewsData(false);

//                 $this->_redirect('*/*/');
//                 return;
//             } catch (Exception $e) {
//                 Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
//                 Mage::getSingleton('adminhtml/session')->setNewsData($this->getRequest()->getPost());
//                 $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
//                 return;
//             }
//         }
//         $this->_redirect('*/*/');
//     }

//     public function deleteAction()
//     {
//         if( $this->getRequest()->getParam('id') > 0 ) {
//             try {
//                 $newsModel = Mage::getModel('news/post');

//                 $newsModel->setId($this->getRequest()->getParam('id'))
//                     ->delete();

//                 Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('adminhtml')->__('Item was successfully deleted'));
//                 $this->_redirect('*/*/');
//             } catch (Exception $e) {
//                 Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
//                 $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
//             }
//         }
//         $this->_redirect('*/*/');
//     }
//     /**
//      * Product grid for AJAX request.
//      * Sort and filter result for example.
//      */
//     public function gridAction()
//     {
//         $this->loadLayout();
//         $this->getResponse()->setBody(
//                $this->getLayout()->createBlock('importedit/adminhtml_news_grid')->toHtml()
//         );
//     }
// }

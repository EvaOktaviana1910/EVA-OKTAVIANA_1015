<?php
include_once 'MODELS/models.php';

class ContactController
{
    private static $contactModel;

    public static function init($conn)
    {
        self::$contactModel = new ContactModel($conn);
    }
    

    static function insertcontactapps()
    {
        $post = array_map('htmlspecialchars', $_POST);
        $success = self::$contactModel->insertcontactapps(
            $post['PHONE_NUMBER'],
            $post['VISITORS'],
            $post['BOOK_TITLE'],
            $post['PUBLISHER']
        );

        if ($success) {
            header('Location: ' . BASEURL . 'index.php');
        } else {
            echo ('Gagal menambahkan data.');
        }
    }

    static function updatecontactapps()
    {
        $post = array_map('htmlspecialchars', $_POST);
        $success = self::$contactModel->updatecontactapps(
            $post['ID_NUMBER'],
            $post['PHONE_NUMBER'],
            $post['VISITORS'],
            $post['BOOK_TITLE'],
            $post['PUBLISHER']
        );

        if ($success) {
            header('Location: ' . BASEURL . 'index.php');
        } else {
            echo ('Gagal mengubah data.');
        }
    }

    static function deletecontactapps()
    {
        $post = array_map('htmlspecialchars', $_POST);
        $success = self::$contactModel->deletecontactapps($post['ID_NUMBER']);
        if ($success) {
            header('Location: ' . BASEURL . 'index.php');
        } else {
            echo ('Gagal menghapus data.');
        }
    }

    static function getcontactapps()
    {
        return self::$contactModel->getcontactapps();
    }
}


?>

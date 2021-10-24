<?php

class About {

    public function index($nama = 'Zunedi', $pekerjaan = 'Programmer')
    {
        echo "Hallo, nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo 'About/page';
    }
}
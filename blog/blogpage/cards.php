<?php
    function get_card_info(){
?>
    <div class="col-md-4">
        <div class="card">
            <?php
                $card_data = get_card_data();
                
            ?>
            <img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://static.wixstatic.com/media/59035a_95c00c32a6be4de283ea34dd0b2d90ea~mv2.png/v1/fit/w_1000,h_800,al_c,q_90/file.webp">
            <div class="card-block">
                <h5 class="card-title">
                    First card title
                </h5>
                <p class="card-text">
                    First card title all the details here-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                </p>
                <p>
                    <a class="btn btn-success" href="#">Action</a> <a class="btn" href="#">Action</a>
                </p>
            </div>
        </div>
    </div>



<?php

}

function get_card_data(){

    $title_list = [

        001 => [
            'image' => '',
            'title' => '',
            'details' => '',
            'btn_action' => ''
            ],
        002 =>[
            'image' => '',
            'title' => '',
            'details' => '',
            'btn_action' => ''
            ],
        003 => '',
    ];

    

    return $title_list;
}
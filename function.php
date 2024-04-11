<?php


function topicsCards($array) {
    foreach ($array as $card){
        echo
        '
        <div class="card-info">
            <div class="card-img">
              <img src="' . $card['img'] . '" alt="Image" />
            </div>
            <h2>' . $card['h2'] . '</h2>
            <button class="topic-button">"' . $card['btn'] . '"</button>
        </div>
        ';
    }
}
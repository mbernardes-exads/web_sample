<?php

file_put_contents('info.txt', file_get_contents('php://input'));

file_put_contents('info_post.txt', $_POST);

file_put_contents('info_get.txt', $_GET);

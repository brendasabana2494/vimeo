<?php
require 'vimeo/autoload.php';
use Vimeo\Vimeo;

const CLIENT_ID = "ad0c25c022900d128458080e934ff480dcba09f0";
const CLIENT_SECRET = "6JmpxRT3CP5YOWnnQjdPdZeBTtRES7mN9W8LJFfTPqvPWOnx3HqBjFzggCLvbWNToUptsGmR4TVGAhJsGz/A/NHIMiOa8n3CCE3i/FXqZifHnFqk8mC5zfhI8b1K9QjX";
const CLIENT_TOKEN = "5769c9b4785ae66348679a71ec2e423a";

$client = new Vimeo(CLIENT_ID, CLIENT_SECRET, CLIENT_TOKEN);

$response = $client->request('/user106784622', array(), 'GET');
print_r($response);
?>
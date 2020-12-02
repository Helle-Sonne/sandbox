<?php

//$app->get('index', '/', \Sandbox\Application\Index::class);
$app->get('vk', '/vk', \Sandbox\Application\Actions\VkAuthGetCodeAction::class);
$app->get('card.get', '/api/v1/patient-cards/{id}', \Vulpix\Application\PatientCard\Card\Actions\CardGetAction::class)->tokens(['id' => '\d+']);

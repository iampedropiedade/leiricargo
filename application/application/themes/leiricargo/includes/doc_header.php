<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php View::element('header_required'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Manrope:wght@400;500;700&family=Space+Grotesk:wght@300;400;500;600;700&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo $this->getThemePath() ?>/app/css/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $this->getThemePath() ?>/app/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $this->getThemePath() ?>/app/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $this->getThemePath() ?>/app/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $this->getThemePath() ?>/app/favicons/site.webmanifest">
</head>
<body>
    <div class="page-loader"></div>
    <div class="page <?php echo $c->getPageWrapperClass(); ?> <?php echo $c->isEditMode() ? 'page-edit-mode' : ''; ?>" data-behaviour="page">
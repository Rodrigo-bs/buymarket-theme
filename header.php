<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> | <?php the_title();?></title>
    <?php wp_head();?>
</head <?php body_class()?>>
<body>
    <header class="header">
        <div class="container">
            <a href="/Home" class="logo">BuyMarket</a>

            <nav class="header-menu_nav">
                <ul>
                    <li><a href="/my-account">Login</a></li>
                    <li><a href="/cart">Carrinho</a></li>
                </ul>
            </nav>
        </div>
    </header>
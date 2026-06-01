<?php
/**
 * Jerusalem Tourism Website
 * Arquivo principal que inclui todas as seções do site 
 * Estrutura:
 * - header.php: Contém DOCTYPE, head, meta tags, Tailwind config e navegação
 * - hero.php: Seção hero com call-to-action
 * - about.php: Informações sobre Jerusalém
 * - tourist-spots.php: Atrações turísticas com filtros
 * - culture.php: Cultura e tradições
 * - gastronomy.php: Gastronomia e culinária
 * - lodging.php: Opções de hospedagem
 * - travel.php: Informações de transporte e viagem
 * - footer.php: Rodapé com contato e links
 */

// Inclui o cabeçalho do site (com DOCTYPE, meta tags e navegação)
include 'includes/header.php';

// Inclui a seção hero (banner principal com CTA)
include 'includes/hero.php';

// Inclui a seção sobre a cidade
include 'includes/about.php';

// Inclui as atrações turísticas (com sistema de filtros)
include 'includes/tourist-spots.php';

// Inclui a seção de cultura e tradições
include 'includes/culture.php';

// Inclui a seção de gastronomia
include 'includes/gastronomy.php';

// Inclui a seção de hospedagem
include 'includes/lodging.php';

// Inclui informações de viagem e como chegar
include 'includes/travel.php';

// Inclui o rodapé do site
include 'includes/footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Jerusalem</title>
</head>
<body>
    <?php
        include 'includes/header.php';
    ?>
</body>
</html>

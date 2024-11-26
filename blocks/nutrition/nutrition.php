<?php
/*
* Nutrition Block Template
*/

$grams = get_field('grams');
$calories = get_field('calories');
$nutrients = get_field('nutrients');
?>


<div class="nutrition">
    <div class="nutrition-box d-flex flex-column">
        <div class="nutrition-box--colm d-flex justify-content-between">
            <div class="nutrition-desc">Informații nutriționale pe <?php echo esc_html($grams); ?></div>
            <div class="nutrition-calories"><?php echo esc_html($calories); ?></div>
        </div>
        <div class="nutrition-box--data d-flex justify-content-between">
            <?php foreach ($nutrients as $nutrient) { ?>
            <div class="nutrition-data">
                <p><?php echo $nutrient['nutrition']; ?></p>
                <p><?php echo $nutrient['grams']; ?></p>
            </div>
            <?php }; ?>
        </div>
    </div>
    <div class="nutrition-info">
        <i>*Informațiile nutriționale diferă în funcție de ingredientele folosite.</i>
    </div>
</div>
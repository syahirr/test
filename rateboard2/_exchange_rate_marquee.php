<?php
if (!empty ($rates)) {
    foreach ($rates as $rate) {
        ?>
        <div class="col-3 w-auto">
            <div class="container">
                <div class="row d-flex gap-2">
                    <div
                            class="marq-country col-auto d-flex align-items-center"
                    >
                        <img
                                src="<?php echo yii::$app->request->baseUrl; ?>/img/v3/<?php echo str_replace('.png', '.svg', $rate['image']) ?>"
                                height="40px"
                        />
                    </div>
                    <small class="marq-rates col-auto"><?php echo strtoupper($rate['short_name']);?></small>
                    <div class="d-flex flex-row gap-3 col-auto">
                        <div class="d-flex flex-row gap-1 ps-2">
                            <small class="marq-rates col-auto purple"
                            >WE BUY</small
                            >
                            <small class="marq-rates col-auto"><?php echo number_format($rate['buy_rate'] * $rate['unit'], 4); ?></small>
                        </div>
                        <div class="d-flex flex-row gap-2">
                            <small class="marq-rates col-auto orange"
                            >WE SELL</small
                            >
                            <small class="marq-rates col-auto"><?php echo number_format($rate['sell_rate'] * $rate['unit'], 4); ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
<div class="container-fluid">
    <table
            class="table table-light table-striped table-borderless text-end mb-0 debug"
            style="overflow: hidden"
    >
        <tbody>
        <tr>
            <?php
            if (!empty ($rates)) {
            foreach ($rates

            as $number => $rate) { ?>

            <td scope="row"
                class="text-start <?php if (($number + 1) % 2 == 1) echo ' left-side'; else echo 'right-side'; ?> ">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-6 d-flex align-items-center">
                            <div class="container">
                                <div class="row gap-3">
                                    <div class="d-flex align-items-center w-72">
                                        <img
                                                src="<?php echo yii::$app->request->baseUrl; ?>/img/v3/<?php echo substr($rate['currency_short'], 0, 2) ?>.svg"
                                                class="w-72"
                                        />
                                    </div>
                                    <div
                                            class="d-flex flex-row gap-18 align-items-center weight-800"
                                    >
                                        <p><?php echo strtoupper($rate['currency_short']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 d-flex align-items-center">
                            <!-- keyframes @animationScroll2 for 2 items -->
                            <?php if (count($rate['type']) == 1) { ?>
                                <div class="container">
                                    <?php foreach ($rate['type'] as $type) { ?>
                                        <div class="row gap-3">
                                            <div class="col-6 d-flex align-items-center text-end">
                                                <small><?php echo ucwords(strtolower($type['mirs_type'])) ?></small>
                                            </div>
                                            <div
                                                    class="col-6 d-flex align-items-center justify-content-center rates"
                                            >
                                                <p><?php echo $type['rate'] ?></p>
                                            </div>
                                        </div>

                                    <?php } ?>
                                </div>
                            <?php } else { ?>
                            <div class="container animationScroll2">
                                <?php foreach ($rate['type'] as $type) { ?>
                                    <div class="row gap-3">
                                        <div class="col-6 d-flex align-items-center text-end">
                                            <small><?php echo ucwords(strtolower($type['mirs_type'])) ?></small>
                                        </div>
                                        <div class="col-6 d-flex align-items-center justify-content-center rates">
                                            <p><?php echo $type['rate'] ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <?php if (($number + 1) % 2 == 0){ ?>
        </tr>
        <tr>
            <?php }
            }
            }

            ?>
        </tr>
        </tbody>
    </table>
</div>

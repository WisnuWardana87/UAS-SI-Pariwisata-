<!--== Page Title Area Start ==-->
<section id="page-title-area" class="overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Vacation</h2>
                    <br>
                    <br>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!-- Choose Area Content Start -->
<br>
<section id="cart_items">
    <div class="container">
        <?php if (!$this->cart->contents()) :
            echo 'Sorry your visit does not exist';
        else :
        ?>
            <?php echo form_open('Frontend/keranjang_update'); ?>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Number of People</td>
                            <td class="description">Travel</td>
                            <td class="price">Price of Admission</td>
                            <td class="quantity">Sub Total</td>
                            <td class="total">Delete</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1; ?>
                        <?php foreach ($this->cart->contents() as $items) : ?>

                            <?php echo form_hidden('rowid[]', $items['rowid']); ?>
                            <tr <?php if ($i & 1) {
                                    echo 'class="alt"';
                                } ?>>
                                <td class="td-keranjang">
                                    <select name="qty[]" class="input-teks">
                                        <?php
                                        for ($i = 1; $i <= 200; $i += 1) {
                                            if ($i == $items['qty']) {
                                                echo "<option selected>" . $items['qty'] . "</option>";
                                            } else {
                                                echo "<option>" . $i . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>

                                <td class="td-keranjang"><?php echo $items['name']; ?></td>

                                <td class="td-keranjang">Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
                                <td class="td-keranjang">Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
                                <td class="td-keranjang" align="center"><a href="<?php echo base_url(); ?>index.php/Frontend/keranjang_hapus/<?php echo $items['rowid']; ?>"><i class="fa fa-times"></i></a></td>
                            </tr>

                            <?php $i++; ?>
                        <?php endforeach; ?>

                        <tr>
                            <td class="td-keranjang" colspan=3><b>Total</b></td>
                            <td class="td-keranjang" colspan=2>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></td>
                        </tr>


                    </tbody>
                </table>
                <button class="btn btn-default get" type="submit" value="update_keranjang">
                    <h3>Update</h3>
                </button>
                <a href="<?php echo base_url(); ?>index.php/Frontend/index">
                    <div class="btn btn-default get">
                        <h3>Select Travel</h3>
                    </div>
                </a>
                <a href="<?php echo base_url(); ?>index.php/Frontend/checkout">
                    <div class="btn btn-default get">
                        <h3>Done</h3>
                    </div>
                </a>
            </div>
        <?php
            echo form_close();
        endif;
        ?>
</section>
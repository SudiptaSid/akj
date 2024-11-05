	<?php include 'include/header.php';?>
	<!-- Cart Page -->
    <section id="cs_cart_pg" class="crt_cko_suc">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <div class="sd_cs_head">
                        <h2>cart</h2>
                    </div>
                </div>
                <div class="col-12">
                    <form action="?0">
                        <table class="order_details main_ord_table">
                            <thead>
                                <tr>
                                    <th class="product_remove">
                                        <i class="fa fa-trash"></i>
                                    </th>
                                    <th class="product_cart_img">
                                        <span>Product Image</span>
                                    </th>
                                    <th class="product_name">
                                        <span>Product Name</span>
                                    </th>
                                    <th class="product_quantity">
                                        <span>quantity</span>
                                    </th>
                                    <th class="product_price">
                                        <span>Unit Price</span>
                                    </th>
                                    <th class="product_total_price">
                                        <span>Total Price</span>
                                    </th>
                                    <th>
                                        <span>Delivered on</span>
                                    </th>
                               </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product_remove">
                                        <a href="#">×</a>
                                    </td>
                                    <td class="product_cart_img">
                                        <a href="#"><img src="assets/images/p1d.jpg" alt=""></a>
                                    </td>
                                    <td class="product_name">
                                        <a href="#">natural typesetting</a>
                                    </td>
                                    <td class="product_quantity">
                                        <input type="text" class="qty_put" value="1">
                                    </td>
                                    <td class="product_price">
                                        <span>$69.00</span>
                                    </td>
                                    <td class="product_total_price">
                                        <span>$69.00</span>
                                    </td>
                                    <td>
                                        <span>10th Dec'20</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product_remove">
                                        <a href="#">×</a>
                                    </td>
                                    <td class="product_cart_img">
                                        <a href="#"><img src="assets/images/p1d.jpg" alt=""></a>
                                    </td>
                                    <td class="product_name">
                                        <a href="#">natural typesetting</a>
                                    </td>
                                    <td class="product_quantity">
                                        <input type="text" class="qty_put" value="1">
                                    </td>
                                    <td class="product_price">
                                        <span>$69.00</span>
                                    </td>
                                    <td class="product_total_price">
                                        <span>$69.00</span>
                                    </td>
                                    <td>
                                        <span>10th Dec'20</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product_remove">
                                        <a href="#">×</a>
                                    </td>
                                    <td class="product_cart_img">
                                        <a href="#"><img src="assets/images/p1d.jpg" alt=""></a>
                                    </td>
                                    <td class="product_name">
                                        <a href="#">natural typesetting</a>
                                    </td>
                                    <td class="product_quantity">
                                        <input type="text" class="qty_put" value="1">
                                    </td>
                                    <td class="product_price">
                                        <span>$69.00</span>
                                    </td>
                                    <td class="product_total_price">
                                        <span>$69.00</span>
                                    </td>
                                    <td>
                                        <span>10th Dec'20</span>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">
                                        <a href="account-info.html" class="btn btn_book">back to account</a>
                                    </td>
                                    <td colspan="4" class="text-right">
                                        <a href="#" class="btn btn_dark">checkout</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>
	<?php include 'include/footer.php';?>
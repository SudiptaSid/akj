	<?php include 'include/header.php';?>
	<!-- Cart Page -->
    <section id="cs_cart_pg" class="crt_cko_suc">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">checkout</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <div class="sd_cs_head">
                        <h2>checkout</h2>
                    </div>
                </div>
                <div class="col-12">
                    <form action="?0" class="form_box">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="frm_lbl" for="">First Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="frm_lbl" for="">Middle Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="frm_lbl" for="">Last Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="frm_lbl" for="">Email Address</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="frm_lbl" for="">Phone no.</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="frm_lbl" for="">alternate Phone no.</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="frm_lbl" for="">Address Line 1</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="frm_lbl" for="">Address Line 2</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="frm_lbl" for="">City</label>
                                    <select class="form-control">
                                        <option>--Select options--</option>
                                        <option>India</option>
                                        <option>SriLanka</option>
                                        <option>united kingdom</option>
                                        <option>saudi arabia</option>
                                        <option>united arab emirates</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="frm_lbl" for="">State</label>
                                    <select class="form-control">
                                        <option>--Select options--</option>
                                        <option>India</option>
                                        <option>SriLanka</option>
                                        <option>united kingdom</option>
                                        <option>saudi arabia</option>
                                        <option>united arab emirates</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="frm_lbl" for="">Zip/Postal Code</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="frm_lbl" for="">Country</label>
                                    <select class="form-control">
                                        <option>--Select options--</option>
                                        <option>India</option>
                                        <option>SriLanka</option>
                                        <option>united kingdom</option>
                                        <option>saudi arabia</option>
                                        <option>united arab emirates</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="frm_lbl" for="">landmark / nearest location</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="frm_lbl" for="">Payment Method</label>
                                    <p class="p_met">
                                        <label>
                                            <input type="radio" name="radio">
                                            Check / Money Order
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            Credit Card
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox">
                                        Ship To This Address
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                    <table class="order_details main_ord_table">
                        <thead>
                            <tr>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product_name">
                                    <a href="#">natural typesetting</a>
                                </td>
                                <td class="product_quantity">
                                    <span>x 2</span>
                                </td>
                                <td class="product_price">
                                    <span>$69.00</span>
                                </td>
                                <td class="product_total_price">
                                    <span>$69.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <strong>Sub-Total:</strong>
                                </td>
                                <td>
                                    <span>$101.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <strong>Flat Shipping Rate:</strong>
                                </td>
                                <td>
                                    <span>$101.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <strong>Total:</strong>
                                </td>
                                <td>
                                    <span>$101.00</span>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4">
                                    <a href="#" class="btn btn_dark">continue</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
	<?php include 'include/footer.php';?>
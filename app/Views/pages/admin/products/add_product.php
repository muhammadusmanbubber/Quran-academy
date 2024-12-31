<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="row justify-content-center mb-1">
        <div class="d-flex justify-content-between align-items-center w-100">
            <h2 class="text-primary fw-bold mb-4">All Products List</h2>
        </div>
    </div>
    <!--Start success and error session -->
    <?php if (session()->get('success')) : ?>
        <div class="alert alert-success">
            <p><?php echo session()->get('success') ?></p>
        </div>
    <?php endif; ?>
    <?php if (session()->get('fail')) : ?>
        <div class="alert alert-danger">
            <p><?php echo session()->get('fail') ?></p>
        </div>
    <?php endif; ?>
    <?php if (!empty(session()->get('validation')) || !empty(session()->get('errors'))) {
        $validation = session()->get('validation');
        $fieldErrors = session()->get('errors');
    } ?>
    <div class="row" scroll-target="basic_info">
        <div class="col-md-6 mb-3">
            <label class="form-label color_primary mb-1">Product Name<span class="required_show">*</span></label>
            <input type="text" class="form-control" required id='product_name' placeholder="Evening Desert Safari" name="title" value="<?= old('title') ?>">
            <?php if (!empty($fieldErrors['title'])) : ?>
                <p class="text-danger"><?= $fieldErrors['title']; ?></p>
            <?php endif ?>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label color_primary mb-1">Category<span class="required_show">*</span></label>
            <select class="form-control" required name="product_category" style="background-color: white; color: #000;">
                <option selected disabled style="background-color: white; color: lightgrey;">---Select---</option>
                <option value="helo">helo</option>
                <option value="helo">helo</option>
            </select>
            <?php if (!empty($fieldErrors['product_category'])) : ?>
                <p class="text-danger"><?= $fieldErrors['product_category']; ?></p>
            <?php endif ?>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label color_primary mb-1">Meta Description</label>
            <textarea class="form-control" rows="4" name="meta_description"><?= old('meta_description') ?></textarea>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label color_primary mb-1">Meta Keywords</label>
            <textarea class="form-control" rows="4" name="meta_keywords"><?= old('meta_keywords') ?></textarea>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label color_primary mb-1">Description<span class="required_show">*</span></label>
            <textarea class="form-control" required rows="10" name="description" style="height: 200px;"><?= old('description') ?></textarea>
            <?php if (!empty($fieldErrors['description'])) : ?>
                <p class="text-danger"><?= $fieldErrors['description']; ?></p>
            <?php endif ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-4">
            <label class="form-label color_primary mb-1">Cover Image<span class="required_show">*</span></label>
            <div id="product-gallery" class="dropzone dropzone_main needsclick dz-clickable">
                <div class="dz-message needsclick">
                    <span class="text">
                        <?php if (!empty(old('productcover_img'))) {
                            $image = base_url('uploads/products/images/' . old('productcover_img'));
                            $style = 'width: -webkit-fill-available;';
                        } else {
                            $image = base_url('assets/img/svg/panel_svg/upload_icon.svg');
                            $style = '';
                        } ?>
                        <img src="<?= $image ?>" alt="" style='<?= $style ?>'>
                        <span class="text_light text_medium">Drag and drop Cover image, or <span class="text_orange">Browse</span></span>
                    </span>
                </div>
            </div>
            <input type="hidden" id="product-image" value="<?= old('productcover_img') ?>" name="productcover_img" required>
            <input type="hidden" name="is_service" id="is_service_input" value="false">
            <?php if (!empty($fieldErrors['productcover_img'])) : ?>
                <p class="text-danger"><?= $fieldErrors['productcover_img']; ?></p>
            <?php endif ?>
            <p class="mt-2 text_small text_light mb-0">Note: Upload image of dimension 1440x573</p>
        </div>
    </div>
    <div class="row">
        <label class="form-label color_primary mb-1">Product Images<span class="required_show">*</span></label>
        <div class="col-lg-3 col-md-6 mb-2">
            <div id="product1-gallery" class="dropzone dropzone_main needsclick dz-clickable">
                <div class="dz-message needsclick">
                    <span class="text"><img src="<?= base_url('assets/img/svg/panel_svg/add_orange.svg') ?>" alt=""></span>
                </div>
            </div>
            <input type="hidden" name="productimages[]" id="image_one" value="">
        </div>
        <div class="col-lg-3 col-md-6 mb-2">
            <div id="product2-gallery" class="dropzone dropzone_main needsclick dz-clickable">
                <div class="dz-message needsclick">
                    <span class="text"><img src="<?= base_url('assets/img/svg/panel_svg/add_orange.svg') ?>" alt=""></span>
                </div>
            </div>
            <input type="hidden" name="productimages[]" id="image_two" value="">
        </div>
        <div class="col-lg-3 col-md-6 mb-2">
            <div id="product3-gallery" class="dropzone dropzone_main needsclick dz-clickable">
                <div class="dz-message needsclick">
                    <span class="text"><img src="<?= base_url('assets/img/svg/panel_svg/add_orange.svg') ?>" alt=""></span>
                </div>
            </div>
            <input type="hidden" name="productimages[]" id="image_three" value="">
        </div>
        <div class="col-lg-3 col-md-6 mb-2">
            <div id="product4-gallery" class="dropzone dropzone_main needsclick dz-clickable">
                <div class="dz-message needsclick">
                    <span class="text"><img src="<?= base_url('assets/img/svg/panel_svg/add_orange.svg') ?>" alt=""></span>
                </div>
            </div>
            <input type="hidden" name="productimages[]" id="image_four" value="">
        </div>
        <p class="mt-2 mb-0 text_small text_light">Note: Upload at least one image of dimension 500x500</p>
        <?php if (!empty(session('image_errors'))) : ?>
            <div class="text-danger"><?= session('image_errors') ?></div>
        <?php endif ?>
    </div>
    <div class="row">
        <div class="col-md-12 text-end mb-4 mt-2">
            <button type="button" class="btn btn-secondary px-4 cancel-btn">Cancel</button>
            <button type="button" class="btn btn-primary px-4 save-btn">Save</button>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<script src="<?= base_url('assets/js/custom_libs/images_upload.js') ?>"></script>
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<script>
    $(document).ready(function() {
        var base_url = '<?php echo base_url(); ?>';
        //start change product feature
        $(document).on('change', '#product_feature', function() {
            //    

            if ($("#product_feature option:selected").length > 1 || $("#product_feature option:selected").length === 1) {
                $('.feature_table').show();
                var selectedOptions = [];
                var selectOptionsName = [];
                var feature_tablehtml = '';
                $("#product_feature option:selected").each(function() {
                    selectedOptions.push($(this).val());
                    selectOptionsName.push($(this).attr('data-name'));
                });

                var s = 1;
                for (var i = 0; i < selectedOptions.length; i++) {
                    var tablehtml = `
                                <tr>
                                    <td class="p-3">
                                        <div class="form-check">
                                         ` + s + `
                                        </div>
                                    </td>
                                    <td class="p-3">
                                        <div class="form-check">
                                        ` + selectOptionsName[i] + `
                                        </div>
                                    </td>
                                    <td class="p-3 option_namez">
                                       <input type="hidden" value=` + selectedOptions[i] + ` name="product_feature[]"> 
                                       <input type="text" class="form-control" name="feature_value[]" required value='<?= old('feature_value[]') ?>' placeholder="Enter Value">
                                    
                                    </td>
                                </tr>
            `;

                    feature_tablehtml += tablehtml;
                    s++;
                }

                $('.featuretable_tr').html(feature_tablehtml);
            } else {
                $('.feature_table').hide();
            }


            // console.log(selectedOptions);
            // console.log(selectOptionsName);
        });


        //start on change transfer_type
        $(document).on('change', '.transfer_typeoption', function() {
            // $('.num_of_quantityfield').html();

            var selected_val = $(this).val();
            var num_of_quantityfield = $(this).closest('tr').find('.num_of_quantityfield');
            var childregular_price = $(this).closest('tr').find('.numchildregular_price');
            var childsale_price = $(this).closest('tr').find('.numchildsale_price');
            var infantregular_price = $(this).closest('tr').find('.numinfantregular_price');
            var infantsale_price = $(this).closest('tr').find('.numinfantsale_price');
            if (selected_val == 'Private Transfers') {
                num_of_quantityfield.html('<input type="number" class="form-control tour_detail_input option_quantity asdasd" id="option_quantity" min="1" name="option_quantity[1][]" value="<?= old('option_quantity.1.0') ?>" placeholder="1">');
                childregular_price.html('<input type="text" class="form-control tour_detail_input" id="option_quantity" name="child_regular_price[1][]" value="-----" readonly style="background: #80808014;cursor: unset;">');
                childsale_price.html('<input type="text" class="form-control tour_detail_input" id="option_quantity" name="child_sale_price[1][]" value="-----" readonly style="background: #80808014;cursor: unset;">');
                infantregular_price.html('<input type="text" class="form-control tour_detail_input" id="option_quantity" name="infant_regular_price[1][]" value="-----" readonly style="background: #80808014;cursor: unset;">');
                infantsale_price.html('<input type="text" class="form-control tour_detail_input" id="option_quantity" name="infant_sale_price[1][]" value="-----" readonly style="background: #80808014;cursor: unset;">');
            } else {
                num_of_quantityfield.html('<input type="text" class="form-control tour_detail_input option_quantity asdasd" id="option_quantity" name="option_quantity[1][]" value="-----" readonly style="background: #80808014;cursor: unset;">');
            }
        });
        //end on change transfer_type

        //end change product feature
        var editor2 = null;
        var editor3 = null;
        var editor4 = null;
        var editor5 = null;
        var editor6 = null;

        //start change product section
        // $(document).on('change', '#product_section', function() {
        //     $('.highlight_section').hide();
        //     $('.inclusions_section').hide();
        //     $('.exclusions_section').hide();
        //     $('.information_section').hide();
        //     $('.redeem_section').hide();


        //     if ($("#product_section option:selected").length > 1 || $("#product_section option:selected").length === 1) {
        //         //  $('.feature_table').show();
        //         var selectedOptions = [];
        //         var selectOptionsName = [];
        //         var feature_tablehtml = '';
        //         $("#product_section option:selected").each(function() {
        //             selectedOptions.push($(this).val());
        //             selectOptionsName.push($(this).attr('data-name'));
        //         });
        //         for (var i = 0; i < selectOptionsName.length; i++) {
        //             if (selectOptionsName[i] == 'Highlights') {
        //                 $('.highlight_section').show();
        //                 if (!editor2) {
        //                     var editor2cfg = {}
        //                     editor2cfg.toolbar = "basic";
        //                     editor2 = new RichTextEditor(".div_editor2", editor2cfg);
        //                 }
        //             } else if (selectOptionsName[i] == 'Inclusions') {
        //                 $('.inclusions_section').show();
        //                 if (!editor3) {
        //                     var editor3cfg = {}
        //                     editor3cfg.toolbar = "basic";
        //                     editor3 = new RichTextEditor(".div_editor3", editor3cfg);
        //                 }
        //             } else if (selectOptionsName[i] == 'Exclusions') {
        //                 $('.exclusions_section').show();
        //                 if (!editor4) {
        //                     var editor4cfg = {}
        //                     editor4cfg.toolbar = "basic";
        //                     editor4 = new RichTextEditor(".div_editor4", editor4cfg);
        //                 }
        //             } else if (selectOptionsName[i] == 'Information') {
        //                 $('.information_section').show();
        //                 if (!editor5) {
        //                     var editor5cfg = {}
        //                     editor5cfg.toolbar = "basic";
        //                     editor5 = new RichTextEditor(".div_editor5", editor5cfg);
        //                 }
        //             } else if (selectOptionsName[i] == 'Redeem') {
        //                 $('.redeem_section').show();
        //                 if (!editor6) {
        //                     var editor6cfg = {}
        //                     editor6cfg.toolbar = "basic";
        //                     editor6 = new RichTextEditor(".div_editor6", editor6cfg);
        //                 }
        //             }

        //         }
        //     }
        // });

        $(document).on('change', '#product_section', function() {
            $('.highlight_section').hide();
            $('.inclusions_section').hide();
            $('.exclusions_section').hide();
            $('.information_section').hide();
            $('.redeem_section').hide();
            $('.product_sectioncard').html("");
            if ($("#product_section option:selected").length > 1 || $("#product_section option:selected").length === 1) {
                //  $('.feature_table').show();
                var selectedOptions = [];
                var selectOptionsName = [];
                var feature_tablehtml = '';
                $("#product_section option:selected").each(function() {
                    selectedOptions.push($(this).val());
                    selectOptionsName.push($(this).attr('data-name'));
                });
                var s = 7;
                for (var i = 0; i < selectOptionsName.length; i++) {

                    var tablehtml = `
                    <div class="row">
        <div class="col-md-12 mb-4">
            <label class="form-label passenger_form_label color_primary mb-1">` + selectOptionsName[i] + `</label>
            <textarea class="form-control passenger_form_input h-auto div_editor` + s + `" name="section_text[]" rows="4"></textarea>
        </div>
    </div>
            `;

                    feature_tablehtml += tablehtml;
                    // if(selectOptionsName[i]=='Highlights'){
                    //     $('.highlight_section').show();
                    // }else if(selectOptionsName[i]=='Inclusions'){
                    //     $('.inclusions_section').show();
                    // }else if(selectOptionsName[i]=='Exclusions'){
                    //     $('.exclusions_section').show();
                    // }else if(selectOptionsName[i]=='Information'){
                    //     $('.information_section').show(); 
                    // }else if(selectOptionsName[i]=='Redeem'){
                    //     $('.redeem_section').show();
                    // }
                    //console.log(selectOptionsName[i]);
                    s++;
                }
                $('.product_sectioncard').html(feature_tablehtml);

                // Initialize ClassicEditor for dynamically added textarea elements
                for (var j = 7; j < s; j++) {
                    // ClassicEditor
                    //     .create(document.querySelector('.div_editor' + j), editorsConfig)
                    //     .catch(error => {
                    //         console.error(error);
                    //     });

                    var editorCfg = {};
                    editorCfg.toolbar = "basic";
                    new RichTextEditor(".div_editor" + j, editorCfg);
                }
            }
        });
        //end change product section
        // $(function() { 
        //     var div_editor_store_front = null;
        //     $("#exampleModalbtn").click(function() { 
        //         $("#exampleModal").modal("show");
        //         if (!div_editor_store_front) {
        //             var div_editor_store_frontcfg = {};
        //             div_editor_store_frontcfg.toolbar = "basic";
        //             div_editor_store_front = new RichTextEditor(".div_editor_store_front", div_editor_store_frontcfg); 
        //         } 
        //     }); 
        // });
        //end change product section

        //start image library

        //end image library


        // $(document).on('click', '.passenger_form_checkbox', function() {
        //     var $checkbox = $(this);
        //     var isChecked = $checkbox.prop('checked');
        //     if (!isChecked) {
        //         $checkbox.prop('checked', false); // Trigger change event after setting 'checked' property
        //     } else {
        //         $checkbox.prop('checked', true).change();
        //     } // Trigger change event after setting 'checked' property
        // });


        // $(document).on('change', '.passenger_form_checkbox', function() {
        //     // Select all checkboxes
        //     var $checkboxes = $('.passenger_form_checkbox');
        //     // Filter checked checkboxes
        //     var checkedCheckboxes = $checkboxes.filter(':checked');

        //     // Iterate through all checkboxes
        //     $checkboxes.each(function() {
        //         var isChecked = $(this).is(":checked");
        //         var $row = $(this).closest('tr');
        //         var relatedFields = $row.find('.allprices'); // Select all fields with class 'allprices' within the same row

        //         if (isChecked) {
        //             relatedFields.prop('required', true); // Make all fields required
        //             console.log('hey');
        //             $('form').validate().element(relatedFields); // Trigger validation for related fields
        //             console.log('were');
        //         } else {
        //             relatedFields.prop('required', false); // Remove required attribute from all fields
        //             relatedFields.each(function() {
        //                 $(this).valid(); // Reset validation state
        //             });
        //         }
        //     });
        // });


        // start handing checkbox option like Without Transfers etc
        // $(document).on('click', '.passenger_form_checkbox', function() {
        //     //      $(this).prop('checked', true);
        //     var $checkbox = $(this);
        //     var myid = $checkbox.attr('data-id');
        //     var $hiddenInput = $checkbox.closest('tr').find('.tranfertype_' + myid);
        //     var relatedFields = $(this).closest('tr').find('.allprices');
        //     if ($checkbox.is(":checked")) {
        //         // relatedFields.prop('required', true);
        //         var myval = $checkbox.val();
        //         $hiddenInput.val(myval);
        //     } else {
        //         //relatedFields.prop('required', false);
        //         $hiddenInput.val('');
        //     }

        //     //     $checkbox.each(function() {
        //     //     var isChecked = $(this).is(":checked");
        //     //     var $row = $(this).closest('tr');
        //     //     var relatedFields = $row.find('.allprices :input'); // Select all input fields with class 'allprices' within the same row

        //     //     if (isChecked) {
        //     //         relatedFields.prop('required', true); // Make all fields required
        //     //     } else {
        //     //         relatedFields.prop('required', false); // Remove required attribute from all fields
        //     //     }

        //     //     // Trigger validation for the input fields in the row
        //     //     $row.validate().form();
        //     // });
        //     // $('form').validate().element(relatedFields);

        //     //     var $checkboxes = $('.passenger_form_checkbox'); // Select all checkboxes
        //     // var checkedCheckboxes = $checkboxes.filter(':checked'); // Filter checked checkboxes

        //     // // Iterate through all checkboxes
        //     // $checkboxes.each(function() {
        //     //     var isChecked = $(this).is(":checked");
        //     //     var relatedFields = $(this).closest('tr').find('.allprices'); // Select all fields with class 'allprices' within the same row

        //     //     if (isChecked) {
        //     //         relatedFields.prop('required', true); // Make all fields required
        //     //     } else {
        //     //         relatedFields.prop('required', false); // Remove required attribute from all fields
        //     //     }
        //     // });

        //     // // Re-validate the form
        //     // $('form').validate().element('.allprices');
        //     //   //  $('form').validate().element(relatedFields);

        // });
        // end handing checkbox option like Without Transfers etc


        // start entering product name in option table name  
        // $('#product_name').keyup(function() {
        //     var productname = $(this).val();
        //     $('#product_title').html(productname);
        //     $('.tour_optionname').val(productname);
        //     $('.option_name').val(productname);
        // });

        $('.newtitle').keyup(function() {
            var productoptionname = $(this).val();
            $('#product_title').html(productoptionname);
            $('.tour_optionname').val(productoptionname);
            $('.mynewoption_name').val(productoptionname);
            // $('.option_name').val(productoptionname);
        });

        $('.newdescription').keyup(function() {
            // var productoptiondesc = $(this).val();
            console.log('222');
            var productoptiondesc = editor111.getContent();
            // alert(productoptiondesc);
            //$('#product_title').html(productoptionname);
            $('.mytour').val(productoptiondesc);
            // $('.option_name').val(productoptionname);
            $('.mynewoptiondesc').html(productoptiondesc);
            // $('.option_name').val(productoptionname);
        });
        //end entering product name in option table name  


        // start handling add more button click in option table      
        $(document).on('click', '.add_moretable', function() {
            $('.option_name').val('');
            $('#product_table').hide();
            $('.add_featuretable').show();

            $('.transfer_typeoption option:selected').removeAttr('selected');
            //$('.passenger_form_checkbox').prop('checked', false);
            // $('.passenger_form_checkbox').removeAttr('checked');
            //$('.select_option option').removeAttr('selected');

            // $('.tranfertype_1,.tranfertype_2,.tranfertype_3').val('');
            // $('.tranfertype_1,.tranfertype_2,.tranfertype_3').removeAttr('value');
            $('.allprices').prop('required', false);
        });
        // end handling add more button click in option table  

        //start handling option plus button click
        $(document).on('click', '.addoption_btn', function() {

            var $this = $(this);
            var $table = $this.closest('table');
            var selectedValues = [];

            $table.find('.transfer_typeoption').each(function() {
                var selectedValue = $(this).val();
                if (selectedValue !== '') {
                    selectedValues.push(selectedValue);
                }
            });

            // Check if already three transfer_typeoptions are added
            if (selectedValues.length >= 3) {
                Swal.fire({
                    // background: 'abc.png',
                    background: '#F4FCFE',
                    color: '#99EA6B',
                    toast: true,
                    icon: 'error',
                    text: 'All type of transfers are selected',
                    animation: false,
                    //position: position,
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener("mouseenter", Swal.stopTimer);
                        toast.addEventListener("mouseleave", Swal.resumeTimer);
                    },
                });
                return; // Stop further execution
            }

            $.ajax({
                url: base_url + 'admin/get_transfertype',
                type: 'get',
                data: {
                    transfer_typeoption: selectedValues
                },
                dataType: "html",
                success: function(html) {
                    $this.closest('.option_tablebody').append(html);
                }
            });
        });

        //end handling option plus button click


        $(document).on('click', '.minusoption_btn', function() {
            $(this).parents('.mynewtroption').hide();
            $(this).parents('.mynewtroption').html('');
        });

        //started on change category to get addons of category
        $(document).on('change', '.select_categories', function() {

            var selected_values = $('.select_categories').val();
            var selected_length = selected_values.length;

            if (selected_length === 0) {
                selected_values = 0;
            }

            $.ajax({
                url: base_url + 'admin/get_uploadaddons',
                type: 'get',
                data: {
                    selected_categories: selected_values
                },
                dataType: 'html',
                success: function(html) {
                    console.log(html);
                    $('.selectdropdown_addons').html(html);
                }
            });
            // var selected_length = ('.select_categories option:selected').length;
            // //var selected_values = [];
            // if (selected_length > 0) {
            //     // $('.select_categories').each(function() {
            //     //     var selectedValue = $(this).val();
            //     //     if (selectedValue !== '0') {
            //     //         selected_values.push(selectedValue);
            //     //     }
            //     // });
            //     var selected_values = $('.select_categories').val();
            //     $.ajax({
            //         url: base_url + 'admin/get_addons',
            //         type: 'get',
            //         data: {
            //             selected_categories: selected_values
            //         },
            //         dataType: 'html',
            //         success: function(html) {
            //             $('.selectdropdown_addons').html(html);
            //         }
            //     });
            // }
            // console.log('slected',selected_values);
            // if (selected_length > 0) {
            //   alert('selected');
            // }else{
            //     alert('not');
            // }
        });
        //end on change category to get addons of category


        //started on change Addons//
        $(document).on('change', '.newproductaddons', function() {


            //$('.addonstable').html('');
            // var selected_length = $(".newproductaddons option:selected").length;
            // var selected_val = $(this).find('option:selected').attr('data-name');


            var $dropdown = $(this);
            var table = $dropdown.closest('.newaddons').find('.addonstable');

            table.html('');
            var selected_length = $dropdown.find('option:selected').length;
            var selected_name = $dropdown.find('option:selected').attr('data-name');
            var selected_val = $dropdown.find('option:selected').val();



            var pricetable = '';
            if (selected_length > 0) {
                if (selected_val > 0 || selected_val == 'other') {
                    $('.newaddons_div').hide();

                    var categoryselected_values = $('.select_categories').val();
                    var selectedValues = [];
                    $('.newproductaddons').each(function() {
                        var selectedValue = $(this).val();
                        if (selectedValue !== '0') {
                            selectedValues.push(selectedValue);
                        }
                    });
                    $.ajax({
                        url: base_url + 'admin/addmoreaddons',
                        type: 'get',
                        data: {
                            selecteddropdown: selectedValues,
                            categoryselected_values: categoryselected_values
                        },
                        dataType: 'html',
                        success: function(html) {

                            $('.get_dropdownvalues').append(html);
                        }
                    });

                    var tablehtml = `
                <div class='appended_table'>
                  
                <div class="price_table">
                <div class='price_table'>
                <h6 class="mb-2 my_optiontable"></h6>
        <div class="table-responsive mt-2">
            <table class="table price_offers_table table-striped newprice_offers_table mb-0">
                <thead>
                    <tr class="bg_light_orange">
                    <input type='hidden' name='product_item[]' class='product_item'>
                        <th scope="col" class="p-3">Add Ons<span class="required_show">*</span></th>
                        <th scope="col" class="p-3">Quantity<span class="required_show">*</span></th>
                        <th scope="col" class="p-3">Adult Regular Price<span class="required_show">*</span></th>
                        <th scope="col" class="p-3">Adult Sale Price</th>
                        <th scope="col" class="p-3">Child Regular Price</th>
                        <th scope="col" class="p-3">Child Sale Price</th>
                        <th scope="col" class="p-3">Infant Regular Price</th>
                        <th scope="col" class="p-3">Infant Sale Price</th>
                    </tr>
                </thead> 
                <tbody id="addons_tablebody">
                                        <tr class="mynewtraddons">
                           
                            <th scope="row" class="p-3">
                            <div class="d-flex align-items-center">
                            <button type="button" class="btn btn_action text_orange fs-4 addmoreaddons_btn">
                                +
                            </button>
                            <a href="javascript:void(0);" class="btn btn_action ms-1 text_orange fs-3 minusaddons_btn mx-1">
                                -
                            </a>
                            <div class="get_dropdownvalues addonsdropdown_html" style="min-width:150px;">
                            </div>
                        </div>
                        </th>

                        <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices adultaddon_quantity" required name="adultaddon_quantity[]" min="1"  placeholder='3'>
                            </td>

                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices adultaddonregular_price" name="adultaddonregular_price[]" min="1"  placeholder='110'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices adultaddonsale_price" name="adultaddonsale_price[]" min="1"  placeholder='100'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices childaddonregular_price" name="childaddonregular_price[]" min="1" placeholder='90'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices childaddonsale_price" name="childaddonsale_price[]" min="1"  placeholder='80'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices infantaddonregular_price" name="infantaddonregular_price[]" min="1"  placeholder='200'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices infantaddonsale_price" name="infantaddonsale_price[]" min="1"  placeholder='150'>
                            </td>
                        </tr>
                          
                          
                                    </tbody>
            </table>
        </div>
        </div>
        </div>
        </div>
        `;
                    pricetable += tablehtml;


                    //var previoushtml=$('#product_table .newtable1').html();
                    // $('.addonstable').append(pricetable);
                    table.append(pricetable);

                }
            } else {
                $('.addonstable').html('');
            }
        });

        //end on change Addons//

        //start on change dropdown addons
        // $(document).on('change', '.add_onsdropdown', function() {

        // });
        //end on change dropdown addons




        //start add more addons
        $(document).on('click', '.addmoreaddons_btn', function() {

            var showAlert = false;
            var categoryselected_values = $('.select_categories').val();
            var newproductaddons = $('.newproductaddons').val();
            var selectedValues = [];
            var selectedDropdownValues = [];
            var addOnDropdowns = $(this).closest('tr').find('.add_onsdropdown');

            var selectedValues1 = [];

            // Loop through each found .add_onsdropdown element and retrieve its selected value
            addOnDropdowns.each(function() {
                var newselectedValue = $(this).val();
                selectedValues1.push(newselectedValue);
            });
            //console.log('selectedValues1',selectedValues1);




            $('.mynewtraddons .add_onsdropdown').each(function() {
                selectedDropdownValues.push($(this).val());
            });






            // console.log('selectedDropdownValues', selectedDropdownValues);
            // console.log('selectedValue:', selectedValue);
            // console.log('selectedDropdownValues:', selectedDropdownValues);


            var myhtml = '';
            $('.add_onsdropdown').each(function() {
                var selectedValue = $(this).val();
                if (selectedValue !== '0') {
                    selectedValues.push(selectedValue);
                }

                // if (selectedDropdownValues.includes(selectedValue)) {
                //     alert('Already Selected');
                //     showAlert = true;
                //     return false;
                // }

                // } else if (selectedValue === newproductaddons || selectedDropdownValues.includes(selectedValue)) {
                //     showAlert = true;
                //     alert('Already Selected');
                //     return false; // Exit the loop
                // }
                // if (newproductaddons !== selectedValue) {
                //     if (selectedValue !== '0') {
                //         selectedValues.push(selectedValue);
                //     }
                // } else {
                //     showAlert = true;
                //     alert('Already Selected');
                //     return false; // Exit the function
                // }
            });

            // If showAlert is true, don't proceed with AJAX call
            if (showAlert) {
                return; // Exit the function
            }

            $.ajax({
                url: base_url + 'admin/addmoreaddons',
                type: 'get',
                data: {
                    selecteddropdown: selectedValues,
                    categoryselected_values: categoryselected_values,
                    selectedDropdownValues: selectedDropdownValues,

                },
                dataType: 'html',
                success: function(html) {
                    //$('.get_dropdownvalues1').append(html);
                    // myhtml+=html;

                    // if (selectedValues1 == 'Other') {
                    //     $('.other').show();
                    // } else {
                    //     $('.other').hide();

                    var tableoptionhtml = `  <tr class="mynewtraddons">
                           
                           <th scope="row" class="p-3">
                           <div class="d-inline-flex justify-content-center">
                           <button type="button" class="btn btn_action text_orange fs-4 addmoreaddons_btn">
                               +
                           </button>
                           <a href="javascript:void(0);" class="btn btn_action ms-1 text_orange fs-3 minusaddons_btn">
                               -
                           </a>

                           <div  style="min-width:150px;">
                                <div class="addonsdropdown_html">
                                    ${html}
                                </div>

                           
                           </div>
                        
                       </div>
                           </th>
                           <td class="p-3">
                               <input type="number" class="form-control tour_detail_input allprices adultaddon_quantity " required name="adultaddon_quantity []" min="1"  placeholder='110'>
                           </td>
                           <td class="p-3">
                               <input type="number" class="form-control tour_detail_input allprices adultaddonregular_price" name="adultaddonregular_price[]" min="1"  placeholder='110'>
                           </td>
                           <td class="p-3">
                               <input type="number" class="form-control tour_detail_input allprices adultaddonsale_price" name="adultaddonsale_price[]" min="1"  placeholder='100'>
                           </td>
                           <td class="p-3">
                               <input type="number" class="form-control tour_detail_input allprices childaddonregular_price" name="childaddonregular_price[]" min="1" placeholder='90'>
                           </td>
                           <td class="p-3">
                               <input type="number" class="form-control tour_detail_input allprices childaddonsale_price" name="childaddonsale_price[]" min="1"  placeholder='80'>
                           </td>
                           <td class="p-3">
                               <input type="number" class="form-control tour_detail_input allprices infantaddonregular_price" name="infantaddonregular_price[]" min="1"  placeholder='200'>
                           </td>
                           <td class="p-3">
                               <input type="number" class="form-control tour_detail_input allprices infantaddonsale_price" name="infantaddonsale_price[]" min="1"  placeholder='150'>
                           </td>
                       </tr>
                       `;
                    $('#addons_tablebody').append(tableoptionhtml);
                    // }
                }
            });

            // console.log(myhtml);

        });
        //end addmore addons




        //start addons -
        $(document).on('click', '.minusaddons_btn', function() {
            $(this).parents('.mynewtraddons').hide();
            $(this).parents('.mynewtraddons').html('');

            var visibleLength = $('.mynewtraddons:visible').length;
            if (visibleLength == 0) {
                $('.addonstable').html('');
                $('.newaddons_div').show();
            }

        });
        //end addons -


        //start add new option text field change
        $(document).on('change', '.my_optiontext', function() {
            var $this = $(this);
            var otherTextField = $(this).closest('th').find('.add_onsdropdown');
            var option_value = $(this).val();
            var categoryselected_values = $('.select_categories').val();
            var newproductaddons = $('.newproductaddons').val();
            var selectedValues = [];
            var selectedDropdownValues = [];
            var addOnDropdowns = $(this).closest('tr').find('.add_onsdropdown');

            var selectedValues1 = [];

            // Loop through each found .add_onsdropdown element and retrieve its selected value
            addOnDropdowns.each(function() {
                var newselectedValue = $(this).val();
                selectedValues1.push(newselectedValue);
            });
            //console.log('selectedValues1',selectedValues1);




            $('.mynewtraddons .add_onsdropdown').each(function() {
                selectedDropdownValues.push($(this).val());
            });

            var myhtml = '';
            $('.add_onsdropdown').each(function() {
                var selectedValue = $(this).val();
                if (selectedValue !== '0') {
                    selectedValues.push(selectedValue);
                }
            });

            // var $this = $(this);

            $.ajax({
                url: base_url + 'admin/save_moreaddons',
                type: 'get',
                data: {
                    option_value: option_value,
                    selecteddropdown: selectedValues,
                    categoryselected_values: categoryselected_values,
                    selectedDropdownValues: selectedDropdownValues,
                },
                dataType: 'html',
                success: function(html) {
                    // $('.addonsdropdown_html').html(html);
                    //$this.closest('.addonsdropdown_html').html(html);
                    $this.closest('tr').find('.addonsdropdown_html').html(html);
                    $this.closest('tr').find('.other').hide();
                    //$('.other').html("");
                }
            });
            //otherTextField.hide();
        });
        //end add new option text field change

        //start on change addons dropdown
        $(document).on('change', '.add_onsdropdown', function() {
            var selected_value = $(this).val();
            //alert(selectedValues1);
            if (selected_value == 'Other') {
                //$('.other').html("<input type='text' class='form-control my_optiontext' style='margin-top: 6px;'>");
                $(this).closest('tr').find('.other').show();
                // $('.other').show();
            } else {
                $(this).closest('tr').find('.other').hide();
                // $('.other').hide();
            }
        });
        //end on change addons dropdown

        //started  on click Addmore in Addons//
        // $(document).on('click', '.addmore_adons', function() {

        //     var categoryselected_values = $('.select_categories').val();
        //     var selectedValues = [];
        //     $('.newproductaddons').each(function() {
        //         var selectedValue = $(this).val();
        //         if (selectedValue !== '0') {
        //             selectedValues.push(selectedValue);
        //         }
        //     });
        //     $.ajax({
        //         url: base_url + 'admin/addmoreaddons',
        //         type: 'get',
        //         data: {
        //             selecteddropdown: selectedValues,
        //             categoryselected_values: categoryselected_values
        //         },
        //         dataType: 'html',
        //         success: function(html) {

        //             $('.new_addonssection').append(html);
        //         }
        //     });

        //     //$('.newproductaddons').last().change();
        // });
        //end  on click Addmore in Addons//



        // start handling plus button click in more option table      
        $(document).on('click', '.add_btn', function() {
            var tablehtml = `<tr class='mynewtr'>
                    <td class="p-3">
                        <input type="text" class="form-control tour_detail_input  tour_optionname">
                    </td>
                    <td class="p-3">
                        <textarea class="form-control tour_detail_input mytourdescription1 newtours" rows="1"></textarea>
                    </td>
                    <td class="p-3">
                        <div class="d-flex justify-content-center">
                            <button type='button' class="btn btn_action text_orange fs-4 add_btn">
                                +
                            </button>
                            <button type='button' class="btn btn_action ms-1 text_orange fs-3 minus_btn">
                                -
                            </button>
                        </div>
                    </td>
                </tr>`;
            $('#mytable_options').append(tablehtml);
        });


        // end handling plus button click in more option table   


        // start handling minus button click in more option table   
        $(document).on('click', '.minus_btn', function() {
            $(this).parents('.mynewtr').hide();
            $(this).parents('.mynewtr').html('');
        });
        // end handling minus button click in more option table  

        //start cancel button click
        $(document).on('click', '.cancel_btn', function() {
            $('.add_featuretable').hide();
            $('#product_table').show();
            //$('.tranfertype_1').val('Sharing Transfers');
            $('.transfer_typeoption option[value="Sharing Transfers"]').prop('selected', true);
            //$('.passenger_form_checkbox[value="Sharing Transfers"]').prop('checked', true);
            // $('.allprices').prop('required',true);
        });
        //end cancel button click

        // start handling save button click in more option table
        $(document).on('click', '.save_btn', function() {
            // $('.newtable .appended_table').html('');
            // $('.newtable .newtitlesection').html('');
            // $('.newtable .price_table').html('');

            $('.newtable .appended_table').empty().css('margin-top', '0');
            $('.newtable .newtitlesection').empty().css('margin-top', '0');
            $('.newtable .price_table').empty().css('margin-top', '0');

            // $('#product_table .newtitle').val("");
            // $('#product_table .newdescription').val("");

            // $('.newtable .appended_table').hide();
            // $('.newtable .newtitlesection').hide();
            // $('.newtable .price_table').hide();
            var rowCount = $('#mytable_options tr:visible').length;

            // var $product_prices = $('#product_table .allprices');
            // var newval = [];
            // $product_prices.each(function() {
            //     newval.push($(this).val());
            // });

            // if (newval.some(value => value.trim() !== '')) {
            //     var price_table=$('.price_table').clone();
            //     $('.newtable').append(price_table);
            // }

            var isEmpty = false;
            var values = [];
            $('.tour_optionname').each(function() {
                values.push($(this).val());
            });

            for (var i = 0; i < values.length; i++) {
                if (values[i] === '') {
                    isEmpty = true;
                    break;
                }
            }

            if (isEmpty) {
                // Perform the desired action if any value is empty
                alert('Option Name cannot be empty');
            } else {
                showtable(rowCount);
                //$('.save_btn').hide();
                $('.add_featuretable').hide();
                $('.edit_table').show();
                // $('.add_btn').prop('disabled', true);
                // $('.minus_btn').prop('disabled', true);
                // $('.tour_optionname').prop('readonly', true);
                // $('.mytourdescription1').prop('readonly', true);
            }
        });
        // end handling save button click in more option table

        //start form save button click
        $(document).on('click', '.saveformbtn', function(e) {
            e.preventDefault();
            var allTablesChecked = true;
            //  if ($('.passenger_form_checkbox:checked').length > 0) {
            $('.text_danger').remove();
            validateoptiontabel();
            // $('.newprice_offers_table').each(function() {

            //     if (!$(this).is(':visible')) {
            //         // Skip hidden tables
            //         return true; // Continue to the next iteration
            //     }
            //     if ($(this).find('.passenger_form_checkbox:checked').length === 0) {
            //         allTablesChecked = false;
            //         return false; // Exit the loop if any table does not have a checked checkbox
            //     }
            // });

            // if (!allTablesChecked) {
            //     alert('Please choose at least one transfer type in each transfer table.');
            //     return; // Exit function if any table does not have a checked checkbox
            // }

            // if ($('#regForm')[0].checkValidity()) {
            //     // All required fields are valid, submit the form
            //     $('#regForm').submit();
            // } else {
            //     // Required fields are invalid, display an error message or handle accordingly
            //     alert('Please fill in all required fields.');
            // }
            $('#regForm').submit();
            // } else {
            //     alert('Please choose atleast one Transfer Type');
            // }

        });
        //end form save button click

        $(document).on('change', '.option_quantity', function() {
            $(this).next('.text_danger').remove();
            var get_quantity = parseFloat($(this).val());
            if (get_quantity > 0) {
                $(this).next('.text_danger').remove();
            } else {
                $(this).next('.text_danger').remove();
                $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
                // alert('Value cannot be less than 0');
                $(this).val('');
            }

        });
        //start handling regular and sale price
        $(document).on('change', '.adultsale_price', function() {

            $(this).next('.text_danger').remove();
            var get_saleprice = parseFloat($(this).val());
            if (get_saleprice > 0) {
                var adultregularprice = $(this).closest('tr').find('.adultregular_price');
                var get_regularprice = parseFloat(adultregularprice.val());

                //  $(this).next('.text_danger').remove();
                if (get_regularprice < get_saleprice) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Sale price cannot be greater than Regular price</span>');
                    //alert('Sale price cannot be greater than Regular price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }

                //checking if regular price is not given


                if (isNaN(get_regularprice)) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Please enter regular price first</span>');
                    //alert('Sale price cannot be greater than Regular price');
                    $(this).val('');
                }
            }

            //  else {
            //     $(this).next('.text_danger').remove();
            //     $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
            //     // alert('Value cannot be less than 0');
            //     $(this).val('');
            // }
        });

        $(document).on('change', '.childsale_price', function() {
            $(this).next('.text_danger').remove();
            var get_saleprice = parseFloat($(this).val());
            if (get_saleprice > 0) {
                var childregularprice = $(this).closest('tr').find('.childregular_price');
                var get_regularprice = parseFloat(childregularprice.val());
                // $(this).next('.text_danger').remove();
                if (get_regularprice < get_saleprice) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Sale price cannot be greater than Regular price</span>');
                    //alert('Sale price cannot be greater than Regular price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }

                if (isNaN(get_regularprice)) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Please enter regular price first</span>');
                    //alert('Sale price cannot be greater than Regular price');
                    $(this).val('');
                }
            }
            //  else {
            //     $(this).next('.text_danger').remove();
            //     $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
            //     $(this).val('');
            // }
        });

        $(document).on('change', '.infantsale_price', function() {
            $(this).next('.text_danger').remove();
            var get_saleprice = parseFloat($(this).val());
            if (get_saleprice > 0) {
                var infantregularprice = $(this).closest('tr').find('.infantregular_price');
                var get_regularprice = parseFloat(infantregularprice.val());
                $(this).next('.text_danger').remove();
                if (get_regularprice < get_saleprice) {
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Sale price cannot be greater than Regular price</span>');
                    // alert('Sale price cannot be greater than Regular price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }

                if (isNaN(get_regularprice)) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Please enter regular price first</span>');
                    //alert('Sale price cannot be greater than Regular price');
                    $(this).val('');
                }
            }
            //  else {
            //     $(this).next('.text_danger').remove();
            //     $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
            //     $(this).val('');
            // }
        });


        $(document).on('change', '.adultregular_price', function() {
            $(this).next('.text_danger').remove();
            var get_regularprice = parseFloat($(this).val());
            if (get_regularprice > 0) {
                $(this).closest('tr').find('.adultsale_price').next('.text_danger').remove();
                var adultsaleprice = $(this).closest('tr').find('.adultsale_price');
                var get_saleprice = parseFloat(adultsaleprice.val());
                $(this).next('.text_danger').remove();
                if (get_saleprice > get_regularprice) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Regular price cannot be less than Sale price</span>');
                    // alert('Regular price cannot be less than Sale price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }
            } else {
                $(this).next('.text_danger').remove();
                $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
                $(this).val('');
            }
        });

        $(document).on('change', '.childregular_price', function() {
            $(this).next('.text_danger').remove();
            var get_regularprice = parseFloat($(this).val());
            if (get_regularprice > 0) {
                $(this).closest('tr').find('.childsale_price').next('.text_danger').remove();
                var childsaleprice = $(this).closest('tr').find('.childsale_price');
                var get_saleprice = parseFloat(childsaleprice.val());
                $(this).next('.text_danger').remove();
                if (get_saleprice > get_regularprice) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Regular price cannot be less than Sale price</span>');
                    // alert('Regular price cannot be less than Sale price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }
            }
            // else {
            //     $(this).next('.text_danger').remove();
            //     $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
            //     $(this).val('');
            // }
        });

        $(document).on('change', '.infantregular_price', function() {
            $(this).next('.text_danger').remove();
            var get_regularprice = parseFloat($(this).val());
            if (get_regularprice > 0) {
                $(this).closest('tr').find('.infantsale_price').next('.text_danger').remove();
                var infantsaleprice = $(this).closest('tr').find('.infantsale_price');
                var get_saleprice = parseFloat(infantsaleprice.val());
                $(this).next('.text_danger').remove();
                if (get_saleprice > get_regularprice) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Regular price cannot be less than Sale price</span>');
                    //  alert('Regular price cannot be less than Sale price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }
            }
            // else {
            //     $(this).next('.text_danger').remove();
            //     $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
            //     $(this).val('');
            // }
        });

        //end handling regular and sale price

        //start handling addonregular and sale price
        $(document).on('change', '.adultaddonsale_price', function() {

            $(this).next('.text_danger').remove();
            var get_saleprice = parseFloat($(this).val());
            if (get_saleprice > 0) {
                var adultregularprice = $(this).closest('tr').find('.adultaddonregular_price');
                var get_regularprice = parseFloat(adultregularprice.val());

                //  $(this).next('.text_danger').remove();
                if (get_regularprice < get_saleprice) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Sale price cannot be greater than Regular price</span>');
                    //alert('Sale price cannot be greater than Regular price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }

                //checking if regular price is not given


                if (isNaN(get_regularprice)) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Please enter regular price first</span>');
                    //alert('Sale price cannot be greater than Regular price');
                    $(this).val('');
                }
            }

            //  else {
            //     $(this).next('.text_danger').remove();
            //     $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
            //     // alert('Value cannot be less than 0');
            //     $(this).val('');
            // }
        });

        $(document).on('change', '.childaddonsale_price', function() {
            $(this).next('.text_danger').remove();
            var get_saleprice = parseFloat($(this).val());
            if (get_saleprice > 0) {
                var childregularprice = $(this).closest('tr').find('.childaddonregular_price');
                var get_regularprice = parseFloat(childregularprice.val());
                // $(this).next('.text_danger').remove();
                if (get_regularprice < get_saleprice) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Sale price cannot be greater than Regular price</span>');
                    //alert('Sale price cannot be greater than Regular price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }

                if (isNaN(get_regularprice)) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Please enter regular price first</span>');
                    //alert('Sale price cannot be greater than Regular price');
                    $(this).val('');
                }
            }
            //  else {
            //     $(this).next('.text_danger').remove();
            //     $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
            //     $(this).val('');
            // }
        });

        $(document).on('change', '.infantaddonsale_price', function() {
            $(this).next('.text_danger').remove();
            var get_saleprice = parseFloat($(this).val());
            if (get_saleprice > 0) {
                var infantregularprice = $(this).closest('tr').find('.infantaddonregular_price');
                var get_regularprice = parseFloat(infantregularprice.val());
                $(this).next('.text_danger').remove();
                if (get_regularprice < get_saleprice) {
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Sale price cannot be greater than Regular price</span>');
                    // alert('Sale price cannot be greater than Regular price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }

                if (isNaN(get_regularprice)) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Please enter regular price first</span>');
                    //alert('Sale price cannot be greater than Regular price');
                    $(this).val('');
                }
            }
            //  else {
            //     $(this).next('.text_danger').remove();
            //     $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
            //     $(this).val('');
            // }
        });


        $(document).on('change', '.adultaddonregular_price', function() {
            $(this).next('.text_danger').remove();
            var get_regularprice = parseFloat($(this).val());
            if (get_regularprice > 0) {
                $(this).closest('tr').find('.adultaddonsale_price').next('.text_danger').remove();
                var adultsaleprice = $(this).closest('tr').find('.adultaddonsale_price');
                var get_saleprice = parseFloat(adultsaleprice.val());
                $(this).next('.text_danger').remove();
                if (get_saleprice > get_regularprice) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Regular price cannot be less than Sale price</span>');
                    // alert('Regular price cannot be less than Sale price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }
            } else {
                $(this).next('.text_danger').remove();
                $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
                $(this).val('');
            }
        });

        $(document).on('change', '.childaddonregular_price', function() {
            $(this).next('.text_danger').remove();
            var get_regularprice = parseFloat($(this).val());
            if (get_regularprice > 0) {
                $(this).closest('tr').find('.childaddonsale_price').next('.text_danger').remove();
                var childsaleprice = $(this).closest('tr').find('.childaddonsale_price');
                var get_saleprice = parseFloat(childsaleprice.val());
                $(this).next('.text_danger').remove();
                if (get_saleprice > get_regularprice) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Regular price cannot be less than Sale price</span>');
                    // alert('Regular price cannot be less than Sale price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }
            }
            // else {
            //     $(this).next('.text_danger').remove();
            //     $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
            //     $(this).val('');
            // }
        });

        $(document).on('change', '.infantaddonregular_price', function() {
            $(this).next('.text_danger').remove();
            var get_regularprice = parseFloat($(this).val());
            if (get_regularprice > 0) {
                $(this).closest('tr').find('.infantaddonsale_price').next('.text_danger').remove();
                var infantsaleprice = $(this).closest('tr').find('.infantaddonsale_price');
                var get_saleprice = parseFloat(infantsaleprice.val());
                $(this).next('.text_danger').remove();
                if (get_saleprice > get_regularprice) {
                    $(this).next('.text_danger').remove();
                    $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Regular price cannot be less than Sale price</span>');
                    //  alert('Regular price cannot be less than Sale price');
                    $(this).val('');
                } else {
                    $(this).next('.text_danger').remove();
                }
            }
            // else {
            //     $(this).next('.text_danger').remove();
            //     $(this).after('<span class="text_danger prod_code d-block" style="line-height: normal;">Value should be greater than zero</span>');
            //     $(this).val('');
            // }
        });

        //end handling addon regular and sale price


        //start edit button

        $(document).on('click', '.edit_table', function() {
            $('.add_featuretable').show();
            $(this).hide();
        });
        //end edit button

        // start function for show table in more option table
        function showtable(length) {
            $('.product_item').val('');
            $('.newtable').show();
            // var rowCount = $('#mytable_options tr:visible').length;
            var pricetable = '';

            var tour_name = [];
            var tours_desc = [];
            var tours_quantity = [];
            var adult_regularprice = [];
            var adultsale_price = [];
            var childregular_price = [];
            var childsale_price = [];
            var infantregular_price = [];
            var infantsale_price = [];
            var $tours_transfer = [];

            $('.tour_optionname').each(function() {
                tour_name.push($(this).val());

            });

            $('.newtours').each(function() {
                tours_desc.push($(this).val());

            });

            $('.option_quantity').each(function() {
                //alert($(this).val());
                //var quantity = tours_quantity[i] ? tours_quantity[i] : '0';
                var quantity = $(this).val();
                tours_quantity.push(quantity !== undefined && quantity !== '' ? quantity : '0');
            });

            $('.adultregular_price').each(function() {
                adult_regularprice.push($(this).val());
            });

            $('.adultsale_price').each(function() {
                adultsale_price.push($(this).val());
            });

            $('.childregular_price').each(function() {
                childregular_price.push($(this).val());
            });

            $('.childsale_price').each(function() {
                childsale_price.push($(this).val());
            });

            $('.infantregular_price').each(function() {
                infantregular_price.push($(this).val());
            });

            $('.infantsale_price').each(function() {
                infantsale_price.push($(this).val());
            });

            $('.transfer_typeoption').each(function() {
                var selectedValue = $(this).val();
                if (selectedValue !== '') {
                    // Push the selected value into the tours_transfer array
                    $tours_transfer.push(selectedValue);
                }
            });


            var s = 1;
            for (var i = 0; i < length; i++) {
                var quantity = tours_quantity[i] ? tours_quantity[i] : '0';
                var tablehtml = `
                <div class='appended_table'>
                    <div class="row newtitlesection" style="margin-top:10px">
                        <div class="col-md-6 mb-2">
                            <label class="form-label passenger_form_label color_primary mb-1">Title <span class="required_show">*</span></label>
                            <input type="text" class="form-control passenger_form_input newtitle" required name='newtitle[]' value="` + tour_name[i] + `" placeholder="Evening Desert Safari">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label passenger_form_label color_primary mb-1">Description</label>
                            <textarea class="form-control passenger_form_input newdescription" name='newdescription[]' placeholder="In this Trip we have ....">` + tours_desc[i] + `</textarea>
                        </div>
                    </div>
              
                <div class="price_table">
                <div class='price_table'>
                <h6 class="mb-2 my_optiontable"></h6>
        <div class="table-responsive mt-2">
            <table class="table price_offers_table table-striped newprice_offers_table mb-0">
                <thead>
                    <tr class="bg_light_orange">
                    <input type='hidden' name='product_item[]' class='product_item' value=` + s + `>
                        <th scope="col" class="p-3">Transfer&nbsp;Type<span class="required_show">*</span></th>
                        <th scope="col" class="p-3">Quantity/Item*</th>
                        <th scope="col" class="p-3">Adult&nbsp;Regular&nbsp;Price<span class="required_show">*</span></th>
                        <th scope="col" class="p-3">Adult&nbsp;Sale&nbsp;Price<span class="required_show">*</span></th>
                        <th scope="col" class="p-3">Child&nbsp;Regular&nbsp;Price<span class="required_show">*</span></th>
                        <th scope="col" class="p-3">Child&nbsp;Sale&nbsp;Price<span class="required_show">*</span></th>
                        <th scope="col" class="p-3">Infant&nbsp;Regular&nbsp;Price<span class="required_show">*</span></th>
                        <th scope="col" class="p-3">Infant&nbsp;Sale&nbsp;Price<span class="required_show">*</span></th>
                    </tr>
                </thead>
                <tbody class='option_tablebody'>
                                        <tr>
                           
                            <th scope="row" class="p-3">
                            <div class="d-flex align-items-center">
                                        <button type="button" class="btn btn_action text_orange fs-4 addoption_btn me-1">
                                            +
                                        </button>
                            <select class="form-control transfer_typeoption tour_detail_input" name="transfer_type[` + s + `][]">
                                    <option value="" disabled>Select Option</option>
                                    <?php
                                    if (!empty($all_producttransfer)) {
                                        foreach ($all_producttransfer as $val) {
                                            if ($val['name'] == 'Sharing Transfers') {
                                                $checked = 'checked';
                                                $required = '';
                                                $name = $val['name'];
                                                $selected = 'selected';
                                            } else {
                                                $checked = '';
                                                $required = '';
                                                $name = '';
                                                $selected = '';
                                            }
                                    ?>
                                            <option <?= $selected ?> value="<?= $val['name'] ?>" id="mytransfer_<?= $val['id'] ?>" data-id="<?= $val['id'] ?>"><?= $val['name'] ?></option> 
                                            <!-- <input type="hidden" value="<?= $name ?>" class="tranfertype_<?= $val['id'] ?>" name="transfer_type[1][]"> -->
                                    <?php }
                                    } ?>
                                </select>
                                </div>
                            </th>

                            <td class="p-3 option_namez" style="display: none;">
                                        <input type="hidden" class="form-control tour_detail_input option_name mynewoption_name asdasd" value="` + tour_name[i] + `" name="option_name[` + s + `][]">
                                        <textarea class="form-control mytourdescription tour_detail_input mydatadesc mynewoptiondesc"  rows="1" name="option_description[` + s + `][]">` + tours_desc[i] + `</textarea> 
                            </td> 

                            <td class="p-3 option_namez">
                                <input type="number" class="form-control tour_detail_input option_quantity asdasd" value="` + quantity + `" id="option_quantity" min="1" name="option_quantity[` + s + `][]" placeholder="1">
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices adultregular_price" value="` + adult_regularprice[i] + `" min="1"  name="adult_regular_price[` + s + `][]" placeholder='110'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices adultsale_price" min="1" value="` + adultsale_price[i] + `" name="adult_sale_price[` + s + `][]" placeholder='100'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices childregular_price" min="1" value="` + childregular_price[i] + `" name="child_regular_price[` + s + `][]" placeholder='90'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices childsale_price" min="1" value="` + childsale_price[i] + `" name="child_sale_price[` + s + `][]" placeholder='80'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices infantregular_price" min="1" value="` + infantregular_price[i] + `" name="infant_regular_price[` + s + `][]" placeholder='200'>
                            </td>
                            <td class="p-3">
                                <input type="number" class="form-control tour_detail_input allprices infantsale_price" min="1" value="` + infantsale_price[i] + `" name="infant_sale_price[` + s + `][]" placeholder='150'>
                            </td>
                        </tr>
                          
                          
                                    </tbody>
            </table>
        </div>
        </div>
        </div>
        </div>
        `;
                pricetable += $(tablehtml).html();
                s++;
            }
            //var previoushtml=$('#product_table .newtable1').html();
            $('.newtable').append(pricetable);
            //$('.newtable').append(previoushtml);
            // $('#product_table .myheading').hide();
            // $('#product_table').show();
        }
        // end function for show table in more option table

        //start validation
        // function validateProductVariations() {
        //     var valid = true;

        //     var $checkboxes = $('.passenger_form_checkbox'); // Select all checkboxes
        //     var checkedCheckboxes = $checkboxes.filter(':checked'); // Filter checked checkboxes

        //     // Iterate through all checkboxes
        //     $checkboxes.each(function() {

        //         var isChecked = $(this).is(":checked");
        //         var relatedFields = $(this).closest('tr').find('.allprices'); // Select all fields with class 'allprices' within the same row
        //         $(this).closest('tr').find('.allprices').next('.text_danger').remove();
        //         if (isChecked) {

        //             relatedFields.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>')
        //             valid = false;
        //             relatedFields.prop('required', true); // Make all fields required
        //         } else {
        //             relatedFields.next('.text_danger').remove();
        //             relatedFields.prop('required', false); // Remove required attribute from all fields
        //         }
        //     });
        //     return valid;


        //     // $('.variation_quantity').each(function() {
        //     //     const quantityField = $(this);
        //     //     const quantityValue = quantityField.val();
        //     //     const orderQuantityValue = parseFloat($("[name='max_order_quantity']").val()); // Get the order quantity value
        //     //     quantityField.next('.text_danger').remove();
        //     //     if (quantityValue === '') {
        //     //         quantityField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter quantity</span>')
        //     //         valid = false;
        //     //     } else {
        //     //         const integerRegex = /^\d+$/;
        //     //         if (!integerRegex.test(quantityValue)) {
        //     //             quantityField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter valid quantity.</span>');
        //     //             valid = false;
        //     //         } else if (parseFloat(quantityValue) <= orderQuantityValue) { // Compare quantity with order quantity
        //     //             quantityField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Qt must be more than Max Qt limit.</span>');
        //     //             valid = false;
        //     //         } else {
        //     //             quantityField.next('.text_danger').remove();
        //     //         }
        //     //     }
        //     // });
        //     // return valid;
        // }


        function validateoptiontabel() {
            var valid = true;

            // var $checkboxes = $('.passenger_form_checkbox:checked'); // Select all checked checkboxes
            var $checkboxes = $('.transfer_typeoption:visible');

            // if ($('.passenger_form_checkbox:checked').length <= 0) {
            //     var relatedFields = $('.my_optiontable');
            //     relatedFields.next('.text_danger').remove();
            //     relatedFields.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Please Check atleast one checkbox from below</span>');
            //     valid = false;
            // }

            $('.newprice_offers_table').each(function() {

                if (!$(this).is(':visible')) {
                    // Skip hidden tables
                    return true; // Continue to the next iteration
                }
                // if ($(this).find('.passenger_form_checkbox:checked').length === 0) {
                //     var relatedFields = $(this).closest('.price_table').find('.my_optiontable');
                //     relatedFields.next('.text_danger').remove();
                //     relatedFields.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Please check atleast one checkbox from below table</span>');
                //     valid = false;
                // }
            });

            // Iterate through all checked checkboxes
            $checkboxes.each(function() {
                var selectedVal = $(this).val();

                //start for Quantity
                if (selectedVal == 'Private Transfers') {
                    var quantityFields = $(this).closest('tr').find('.option_quantity'); // Select all fields with class 'adultregular_price' within the same row
                    quantityFields.next('.text_danger').remove(); // Remove any previous error messages

                    quantityFields.each(function() {
                        var optionquantityField = $(this);
                        var quantityValue = optionquantityField.val().trim();

                        if (quantityValue === '') {
                            optionquantityField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>');
                            valid = false;
                        } else {
                            var decimalRegex = /^\d{1,10}(\.\d{1,2})?$/;
                            if (!decimalRegex.test(quantityValue)) {
                                optionquantityField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter 10 digits max, up to 2 decimals.</span>');
                                valid = false;
                            }
                        }
                    });
                }
                // end for Quantity

                //start for Adult regular price
                var relatedFields = $(this).closest('tr').find('.adultregular_price'); // Select all fields with class 'adultregular_price' within the same row
                relatedFields.next('.text_danger').remove(); // Remove any previous error messages

                relatedFields.each(function() {
                    var priceField = $(this);
                    var priceValue = priceField.val().trim();

                    if (priceValue === '') {
                        priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>');
                        valid = false;
                    } else {
                        var decimalRegex = /^\d{1,10}(\.\d{1,2})?$/;
                        if (!decimalRegex.test(priceValue)) {
                            priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter 10 digits max, up to 2 decimals.</span>');
                            valid = false;
                        }
                    }
                });
                // end for Adult regular price

                //start for Adult Sale price
                var adultsaleprice = $(this).closest('tr').find('.adultsale_price'); // Select all fields with class 'adultregular_price' within the same row
                adultsaleprice.next('.text_danger').remove(); // Remove any previous error messages

                adultsaleprice.each(function() {
                    var priceField = $(this);
                    var priceValue = priceField.val().trim();

                    // if (priceValue === '') {
                    //     priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>');
                    //     valid = false;
                    // } else {
                    var decimalRegex = /^(?:0|\d{1,10}(\.\d{1,2})?)?$/;
                    if (!decimalRegex.test(priceValue)) {
                        priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter 10 digits max, up to 2 decimals.</span>');
                        valid = false;
                    }
                    //}
                });
                // end for Adult Sale price

                //start for Child Regular price
                var childregularprice = $(this).closest('tr').find('.childregular_price'); // Select all fields with class 'adultregular_price' within the same row
                childregularprice.next('.text_danger').remove(); // Remove any previous error messages

                childregularprice.each(function() {
                    var priceField = $(this);
                    var priceValue = priceField.val().trim();

                    // if (priceValue === '') {
                    //     priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>');
                    //     valid = false;
                    // } else {
                    var decimalRegex = /^(?:0|\d{1,10}(\.\d{1,2})?)?$/;
                    if (!decimalRegex.test(priceValue)) {
                        priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter 10 digits max, up to 2 decimals.</span>');
                        valid = false;
                    }
                    //}
                });
                // end for Child Regular price

                //start for Child Sale price
                var childsaleprice = $(this).closest('tr').find('.childsale_price'); // Select all fields with class 'adultregular_price' within the same row
                childsaleprice.next('.text_danger').remove(); // Remove any previous error messages

                childsaleprice.each(function() {
                    var priceField = $(this);
                    var priceValue = priceField.val().trim();

                    // if (priceValue === '') {
                    //     priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>');
                    //     valid = false;
                    // } else {
                    var decimalRegex = /^(?:0|\d{1,10}(\.\d{1,2})?)?$/;;
                    if (!decimalRegex.test(priceValue)) {
                        priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter 10 digits max, up to 2 decimals.</span>');
                        valid = false;
                    }
                    //}
                });
                // end for Child Sale price

                //start for Infant Regular price
                var infantregularprice = $(this).closest('tr').find('.infantregular_price'); // Select all fields with class 'adultregular_price' within the same row
                infantregularprice.next('.text_danger').remove(); // Remove any previous error messages

                infantregularprice.each(function() {
                    var priceField = $(this);
                    var priceValue = priceField.val().trim();

                    // if (priceValue === '') {
                    //     priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>');
                    //     valid = false;
                    // } else {
                    var decimalRegex = /^(?:0|\d{1,10}(\.\d{1,2})?)?$/;
                    if (!decimalRegex.test(priceValue)) {
                        priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter 10 digits max, up to 2 decimals.</span>');
                        valid = false;
                    }
                    //}
                });
                // end for Infant Regular price

                //start for Infant Sale price
                var infantsaleprice = $(this).closest('tr').find('.infantsale_price'); // Select all fields with class 'adultregular_price' within the same row
                infantsaleprice.next('.text_danger').remove(); // Remove any previous error messages

                infantsaleprice.each(function() {
                    var priceField = $(this);
                    var priceValue = priceField.val().trim();

                    // if (priceValue === '') {
                    //     priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>');
                    //     valid = false;
                    // } else {
                    var decimalRegex = /^(?:0|\d{1,10}(\.\d{1,2})?)?$/;
                    if (!decimalRegex.test(priceValue)) {
                        priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">Enter 10 digits max, up to 2 decimals.</span>');
                        valid = false;
                    }
                    //}
                });
                // end for Infant Sale price


                //start for Option name
                // var optionname = $(this).closest('tr').find('.option_name'); // Select all fields with class 'adultregular_price' within the same row
                // optionname.next('.text_danger').remove(); // Remove any previous error messages

                // optionname.each(function() {
                //     var priceField = $(this);
                //     var priceValue = priceField.val();

                //     if (priceValue === '') {
                //         priceField.after('<span class="text_danger prod_code d-block" style="line-height: normal;">This field is required</span>');
                //         valid = false;
                //     }
                // });
                // end for Option name


            });

            return valid;
        }

        //stop validation

        //start form validation jquery
        $('form').validate({
            rules: {
                title: {
                    required: true,
                },
                'product_category[]': {
                    required: true,
                },
                overview: {
                    required: true,
                },
                productcover_img: {
                    required: true
                },
                select_feature: {
                    required: true,
                }

            },
            messages: {
                title: {
                    required: "Product Name is required",
                },
                'product_category[]': {
                    required: "Category is required",
                },
                overview: {
                    required: "Overview is required",
                },
                productcover_img: {
                    required: "Product Cover is required",
                },
                select_feature: {
                    required: "Feature is required",
                },

            },
            submitHandler: function(form) {
                if (validateoptiontabel()) {
                    form.submit();
                } else {
                    $('html, body').animate({
                        scrollTop: 0
                    }, 'fast');
                    event.preventDefault();
                }
                //form.submit();
            }
        });
        //end form validation jquery

    });




    initializeFileUploader(
        '#product-gallery', //
        '<?php echo base_url('admin/upload-resized-images') ?>', //
        '<?= base_url() ?>',
        1,
        '#product-image', //
        'image/jpeg,image/png,image/jpg', {
            'directory': 'uploads/products/images/', //
            'dir_folder': 'images', //
            // 'width': '1440',
            // 'height': '573',
            'dimensionsWithPath': JSON.stringify([{
                    thumbnail_path: 'thumbnail1440-573',
                    width: '1440',
                    height: '573'
                },
                //     {
                //         thumbnail_path: 'thumbnail160-120',
                //         width: '160',
                //         height: '120'
                //     },
            ])
        }
    );

    initializeFileUploader(
        '#product1-gallery', //
        '<?php echo base_url('admin/upload-resized-images') ?>', //
        '<?= base_url() ?>',
        1,
        '#image_one', //
        'image/jpeg,image/png,image/jpg', {
            'directory': 'uploads/products/images/', //
            'dir_folder': 'images', //
            // 'width': '500',
            // 'height': '500',
            'dimensionsWithPath': JSON.stringify([{
                    thumbnail_path: 'thumbnail204-137',
                    width: '204',
                    height: '137'
                },
                //     {
                //         thumbnail_path: 'thumbnail160-120',
                //         width: '160',
                //         height: '120'
                //     },
            ])
        }
    );

    initializeFileUploader(
        '#product2-gallery', //
        '<?php echo base_url('admin/upload-image') ?>', //
        '<?= base_url() ?>',
        1,
        '#image_two', //
        'image/jpeg,image/png,image/jpg', {
            'directory': 'uploads/products/images/', //
            'dir_folder': 'images', //
            'width': '500',
            'height': '500',
            // 'dimensionsWithPath': JSON.stringify([{
            //         thumbnail_path: 'thumbnail361-217',
            //         width: '361',
            //         height: '217'
            //     },
            //     {
            //         thumbnail_path: 'thumbnail160-120',
            //         width: '160',
            //         height: '120'
            //     },
            // ])
        }
    );

    initializeFileUploader(
        '#product3-gallery', //
        '<?php echo base_url('admin/upload-image') ?>', //
        '<?= base_url() ?>',
        1,
        '#image_three', //
        'image/jpeg,image/png,image/jpg', {
            'directory': 'uploads/products/images/', //
            'dir_folder': 'images', //
            'width': '500',
            'height': '500',
            // 'dimensionsWithPath': JSON.stringify([{
            //         thumbnail_path: 'thumbnail361-217',
            //         width: '361',
            //         height: '217'
            //     },
            //     {
            //         thumbnail_path: 'thumbnail160-120',
            //         width: '160',
            //         height: '120'
            //     },
            // ])
        }
    );

    initializeFileUploader(
        '#product4-gallery', //
        '<?php echo base_url('admin/upload-image') ?>', //
        '<?= base_url() ?>',
        1,
        '#image_four', //
        'image/jpeg,image/png,image/jpg', {
            'directory': 'uploads/products/images/', //
            'dir_folder': 'images', //
            'width': '500',
            'height': '500',
            // 'dimensionsWithPath': JSON.stringify([{
            //         thumbnail_path: 'thumbnail361-217',
            //         width: '361',
            //         height: '217'
            //     },
            //     {
            //         thumbnail_path: 'thumbnail160-120',
            //         width: '160',
            //         height: '120'
            //     },
            // ])
        }
    );

    // initializeFileUploader(
    //     '#profile-pic', //
    //     '<?php echo base_url('admin/upload-resized-images') ?>', //
    //     '<?= base_url() ?>',
    //     1,
    //     '#profile-image', //
    //     'image/jpeg,image/png,image/jpg', {
    //         'directory': 'uploads/profile/images/', //
    //         'dir_folder': 'images', //
    //         // 'width': '1440',
    //         // 'height': '573',
    //         'dimensionsWithPath': JSON.stringify([{
    //                 thumbnail_path: 'thumbnail40-40',
    //                 width: '40',
    //                 height: '40'
    //             },
    //             //     {
    //             //         thumbnail_path: 'thumbnail160-120',
    //             //         width: '160',
    //             //         height: '120'
    //             //     },
    //         ])
    //     }
    // );
</script>
<script>
    /* Write code on document load */
    $(document).ready(function() {
        var scrollTrigger = $("*[scroll-trigger]");
        scrollTrigger.bind('click', function(e) {
            e.preventDefault(); // prevent hard jump, the default behavior
            var _this = $(this);
            var triggerAttr = _this.attr('scroll-trigger');
            var scrollTarget = $('*[scroll-target=' + triggerAttr + ']'); // Set the target as variable

            // perform animated scrolling by getting top-position of target-element and set it as scroll target
            $('html, body').stop().animate({
                scrollTop: scrollTarget.offset().top - 80
            }, 100);
            return false;
        });
    });
</script>
<script>
    new DataTable('#example');

    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            // console.error(error);
        });
</script>
<script>
    var editor1cfg = {}
    editor1cfg.toolbar = "basic";
    var editor1 = new RichTextEditor(".div_editor1", editor1cfg);

    var editor111cfg = {}
    editor111cfg.toolbar = "basic";
    editor111cfg.height = "100px"; // Set the desired height here
    var editor111 = new RichTextEditor(".div_editor111", editor1cfg);

    // var editor7cfg = {}
    // editor7cfg.toolbar = "basic";
    // var editor7 = new RichTextEditor(".div_editor7", editor7cfg);

    // var editor8cfg = {}
    // editor8cfg.toolbar = "basic";
    // var editor8 = new RichTextEditor(".div_editor8", editor8cfg);

    // var editor9cfg = {}
    // editor9cfg.toolbar = "basic";
    // var editor9 = new RichTextEditor(".div_editor9", editor9cfg);

    // var editor10cfg = {}
    // editor10cfg.toolbar = "basic";
    // var editor10 = new RichTextEditor(".div_editor10", editor10cfg);
</script>
<?= $this->endSection() ?>
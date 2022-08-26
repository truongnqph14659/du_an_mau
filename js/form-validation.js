   //   validation form Đăng nhập
$(function() {
    $("form[name='login']").validate({
      // Specify validation rules
      rules: {
        email: "required",
        password: "required"
      },
      messages: {
        email: "không được để trống email",
        password: "Không được để trống password"
    
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
    //   validation form ĐK TK
  $(function() {
    $("form[name='register']").validate({
      rules: {
        name:"required",
        email:{
            required: true,
            email: true
        },
        password:{
            required: true,
            minlength: 5 
        }
      },
      messages: {
        name: "Không được để trống name",
        email:{
            required:"không được để trống email",
            email:"không đúng định dạng email name@.com"
        },
        password:{
            required:"không được để trống password",
            minlength:"password quá ngắn"
        }
    
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
  //   validation form nhập loại hàng
  $(function() {
    $("form[name='loaihang']").validate({
      // Specify validation rules
      rules: {
        ten_loai:"required"
   
      },
      messages: {
        ten_loai: "Không được để trống tên loại",
    
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
//   validation form nhập loại hàng
  $(function() {
    $("form[name='change_loaihang']").validate({
      // Specify validation rules
      rules: {
        ten_loai:"required"
      },
      messages: {
        ten_loai: "không được để trống tên loại",
    
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
  //   validation form nhập hàng
  $(function() {
    $("form[name='products']").validate({
      // Specify validation rules
      rules: {
        ten_sp:{
            required: true,
            minlength: 10
        },
        don_gia:{
            required: true,
            minlength: 5 
        },
        images_sp:"required",
        ngay_nhap:"required",
        ma_loai_sp:"required",
        mo_ta_chi_tiet:{
            required: true,
            minlength: 20
        }
      },
      messages: {
        images_sp: "không được để trống ảnh sản phẩm",
        ngay_nhap: "không được để trống ngày nhập",
        nma_loai_sp: "Hãy chọn loại hàng tương ứng",
        mo_ta_chi_tiet:{
            required:"không được để trống mô tả",
            minlength:"mô tả quá ngắn"
        },
        ten_sp:{
            required:"không được để trống tên sản phẩm",
            minlength:"tên sản phẩm quá ngắn"
        },
        don_gia:{
            required:"không được để trống đơn giá",
            minlength:"đơn giá quá thấp"
        }
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
  //   validation form repassword
  $(function() {
    $("form[name='repass_user']").validate({
      // Specify validation rules
      rules: {
        email:{
            required: true,
            email: true
        },
        new_password:{
            required: true,
            minlength: 5 
        },
        confirm_password:{
            required: true,
            minlength: 5 
        }
        
      },
      messages: {
        email:{
            required:"không được để trống email",
            email:"không đúng định dạng email name@.com"
        },
        new_password:{
            required:"không được để trống password",
            minlength:"password quá ngắn"
        },
        confirm_password:{
            required:"không được để trống confirm password",
            minlength:"confirm password quá ngắn"
        }
      }
    });
  });
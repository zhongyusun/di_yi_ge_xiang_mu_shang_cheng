<script src="https://cdn.bootcss.com/sweetalert/2.1.2/sweetalert.min.js"></script>
{{--消息模板提示由 https://sweetalert.bootcss.com/docs/ 友情赞助--}}
{{--表单验证错误处理--}}
<?php
////    打印所有 session 可看到我们闪存的 succes 和 danger
//dump(session()->all())
//?>
@if ($errors->any())
    <script>
        swal({
            text: "@foreach ($errors->all() as $error) {{ $error }}\r\n @endforeach",
            icon: "warning",
            button: false
        });
    </script>
@endif
@if (session()->has('success'))
    <script>
        swal({
            text: "{{session()->get('success')}}",
            icon: "success",
            button: false
        });
    </script>
@endif
@if (session()->has('danger'))
    <script>
        swal({
            text: "{{session()->get('danger')}}",
            icon: "warning",
            button: false
        });
    </script>
@endif

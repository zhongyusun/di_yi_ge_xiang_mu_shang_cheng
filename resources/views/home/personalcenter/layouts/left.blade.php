<div class="tod_tongc_zuoc">
    <div class="zuoc_toux">
        <div class="toux_kuang">
            <div class="userImage">
                <div class="myGome_userPhoto">
                    <div class="layui-upload-drag" id="test10">
                        <img src="{{auth()->user()->icon}}" class="layui-circle" id="user_icon">
                        <form action="{{route('home.basic.update',auth()->user())}}" method="post" id="editCicon">
                            @csrf @method('PUT')
                            <input type="hidden" name="icon" value="">
                        </form>
                    </div>
                </div>
            </div>
            <div class="user_name_Level">
                <p class="user_name" title="{{auth()->user()->name}}">{{auth()->user()->name}}</p>
            </div>
        </div>
        <div class="user_counts">
            <ul>
                <li>
                    <div class="count_item">
                        <a href="{{route('home.order.create',['start'=>1])}}">
                            <i class="count_icon count_icon01"></i> 待付款
                            <em id="waitPay">2</em>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="count_item">
                        <a href="{{route('home.order.create',['start'=>3])}}">
                            <i class="count_icon count_icon02"></i> 待发货
                            <em id="waitPay">4</em>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="count_item">
                        <a href="{{route('home.order.create',['start'=>5])}}">
                            <i class="count_icon count_icon03"></i> 待收货
                            <em id="waitPay">0</em>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="count_item">
                        <a href="#">
                            <i class="count_icon count_icon04"></i> 待评价
                            <em id="waitPay">8</em>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="wod_tongc_daoh_lieb">
        <div class="diy_top">
            <ul>
                <h3>订单中心</h3>
                <li><a href="{{route('home.order.create')}}">我的订单</a></li>
                <li><a href="#">退换货单</a></li>
                <li><a href="pingj_shaid.html">评价晒单</a></li>
            </ul>
            <ul>
                <h3>管理中心</h3>
                <li><a href="wod_shouc.html">我的收藏</a></li>
            </ul>
        </div>
        <div class="diy_top">
            <ul>
                <h3>账户设置</h3>
                <li><a href="{{route('home.basic.index')}}">基本资料</a></li>
                <li><a href="{{route('home.site.index')}}">收货地址</a></li>
            </ul>
        </div>
    </div>
</div>
<script src="{{asset('org/layui/layui.js')}}"></script>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    layui.use(['upload', 'layedit'], function () {
        var $ = layui.jquery
            , upload = layui.upload;
        //拖拽上传
        upload.render({
            elem: '#test10'
            ,
            url: "{{route('util.upload')}}"
            ,
            accept: 'images'
            , data: {
                '_token': "{{csrf_token ()}}"
            },
            multiple: false
            ,
            acceptMime: "{{hd_config('upload.upload_accept_mime')}}" ? "{{hd_config('upload.upload_accept_mime')}}" : "image/jpg, image/png,image/jpeg"
            ,
            size: {{hd_config('upload.upload_size')?hd_config('upload.upload_size'): 500000000}} //最大允许上传的文件大小，单位 KB。不支持ie8/9
            //成功过后的回调
            ,
            done: function (res) {
                //console.log(res)
                if (res.code == 0) {
                    // $('#test10').html('<img src="' + res.data.src + '" alt="" width="150px" class="layui-upload-img"><input type="hidden" name="list_pic" value="' + res.data.src + '">')
                    $('#user_icon').attr('src',res.data.src);
                    $('input[name=icon]').val(res.data.src);
                    //触发表单提交
                    $('#editCicon').submit();
                } else {
                    layer.msg(res.msg, function () {

                    })
                }
            }
        });
    })
    ;
</script>

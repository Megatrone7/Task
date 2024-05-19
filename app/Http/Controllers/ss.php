public function otp_code(Request $request) {
        $code = Code::where('id',$request->id)->where('company_id', session('id'))->first();
        $url = $request->url;
        $url_back = $request->url_back;
        return view('front.otp_code',compact('code','url','url_back'));
    }
۰۹:۲۲
public function checkcode(Request $request)
    {
        $code = Code::where('id',$request->id)->where('company_id', session('id'))->first();

        if($request->code != $code->code){
            return ['success' => false];
        } else {
            return ['success' => true];
        }
    }
    public function recode(Request $request)
    {
        $code_item = Code::where('id',$request->id)->where('company_id', session('id'))->first();
        $code = rand(1000, 9999);
        $varible['code'] = $code;
        $sms_status = SendSmsModel::send($request->phone_number,'sms_otp_code',$varible);
        $code_data = [
            'code' => $code,
            'created_at' => now(),
        ];
        $code_item->update($code_data);
        return ['success' => true];
    }
۰۹:۲۲
public function send_otp_code()
    {
        $phone = session('phone');
        $mobile_number = $phone;
        $send = 'true';
        $time_now = time();

        $orders = Code::where('phone',$mobile_number)->where('company_id', session('id'))->orderBy('created_at', 'DESC')->get();

        foreach ($orders as $key => $order)
        {
            $date_send = strtotime($order->created_at) + 120;

            if($time_now < $date_send)
            {
                $send = 'false';
                $id = $order->id;
                $code = Code::where('id',$id)->where('company_id', session('id'))->first();
                $url = 'url';
                $url_back = '$request->url_back';
                return view('register.otp',compact('code','url','url_back'));
                break;
            }
        }

        if($send == 'true')
        {
            $code = rand(1000, 9999);
            $variable['code'] = $code;
            $sms_status = SendSmsModel::send($mobile_number,'sms_otp_code',$variable);

            $order_data = [
                'phone' => $mobile_number,
                'company_id' => session('id'),
                'code' => $code,
                'type' => 'otp_code',
            ];

            $order_object = Code::create($order_data);
            $id = $order_object->id;
            $code = Code::where('id',$id)->where('company_id', session('id'))->first();
            $url = 'url';
            $url_back = '$request->url_back';

            return view('register.otp',compact('code','url','url_back'));
        }
    }

    public function otp_code_confirm(Request $request)
    {
        $id = $request->id;
        $code_item = Code::where('id',$id)->where('company_id', session('id'))->first();
        $code = $request->code_1.$request->code_2.$request->code_3.$request->code_4;
        if($code == $code_item->code)
        {
            session(['phone' => $code_item->phone]);
            session(['phone_confirm' => 'yes']);

            if (!ContactForm::where('phone',session('phone'))->exists())
            {
                ContactForm::create([
                    'phone' => session('phone')
                ]);
            }

            $status = ContactForm::where('phone',session('phone'))->first()->status;

            if($status == 'message_sent')
            {
                return redirect()->route('show_modules_and_packages');
            }

        }
        else
        {
            return Redirect::back()->withErrors(['error' => 'کد معتبر نیست']);
        }

        return redirect()->route('show_register_form');
    }


    public function recode(Request $request)
    {
        $code_item = Code::where('id',$request->id)->where('company_id', session('id'))->first();
        $code = rand(1000, 9999);
        $varible['code'] = $code;
        $sms_status = SendSmsModel::send($request->phone_number,'sms_otp_code',$varible);
        $code_data = [
            'code' => $code,
            'created_at' => now(),
        ];
        $code_item->update($code_data);
        return ['success' => true];
    }

    public function checkcode(Request $request)
    {
        $code = Code::where('id',$request->id)->where('company_id', session('id'))->first();

        if($request->code != $code->code)
        {
            return ['success' => false];
        }
        else
        {
            return ['success' => true];
        }
    }
۰۹:۲۳
var code = $('#code_1').val()+$('#code_2').val()+$('#code_3').val()+$('#code_4').val();
                var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });
                $.ajax({
                    url: '/checkcode',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        id: id,
                        code: code,
                        phone_number: phone,
                    },
                    success: function (response) {
                        if (response.success) {
                            document.getElementById("send_code_form").submit();
                        } else {
                            $("#error_code").removeClass("hide");
                            $("#input_group").addClass("error-input-group");
                        }
                    },
                    erorr: function () {}
                });
            }
        }

        function handlePaste(e) {
            e.preventDefault()
            const paste = e.clipboardData.getData('text')
            inputs.forEach((input, i) => {
                input.value = paste[i] || ''
            })
        }

        function handleBackspace(e) {
            const input = e.target
            if (input.value) {
                $("#error_code").addClass("hide");
                $("#input_group").removeClass("error-input-group");
                input.value = ''
                return
            }

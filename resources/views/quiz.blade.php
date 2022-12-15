<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - GoSNippets</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' rel='stylesheet'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href='' rel='stylesheet'>
    <style>
        body {

            background-color: #816161;
        }

        label.btn {
            padding: 18px 60px;
            white-space: normal;
            -webkit-transform: scale(1.0);
            -moz-transform: scale(1.0);
            -o-transform: scale(1.0);
            -webkit-transition-duration: .3s;
            -moz-transition-duration: .3s;
            -o-transition-duration: .3s
        }

        label.btn:hover {
            text-shadow: 0 3px 2px rgba(0, 0, 0, 0.4);
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
        }

        label.btn-block {
            text-align: left;
            position: relative
        }

        label .btn-label {
            position: absolute;
            left: 0;
            top: 0;
            display: inline-block;
            padding: 0 10px;
            background: #49548b;
            height: 100%
        }

        label .glyphicon {
            top: 34%
        }

        .element-animation1 {
            animation: animationFrames ease .8s;
            animation-iteration-count: 1;
            transform-origin: 50% 50%;
            -webkit-animation: animationFrames ease .8s;
            -webkit-animation-iteration-count: 1;
            -webkit-transform-origin: 50% 50%;
            -ms-animation: animationFrames ease .8s;
            -ms-animation-iteration-count: 1;
            -ms-transform-origin: 50% 50%
        }

        .element-animation2 {
            animation: animationFrames ease 1s;
            animation-iteration-count: 1;
            transform-origin: 50% 50%;
            -webkit-animation: animationFrames ease 1s;
            -webkit-animation-iteration-count: 1;
            -webkit-transform-origin: 50% 50%;
            -ms-animation: animationFrames ease 1s;
            -ms-animation-iteration-count: 1;
            -ms-transform-origin: 50% 50%
        }

        .element-animation3 {
            animation: animationFrames ease 1.2s;
            animation-iteration-count: 1;
            transform-origin: 50% 50%;
            -webkit-animation: animationFrames ease 1.2s;
            -webkit-animation-iteration-count: 1;
            -webkit-transform-origin: 50% 50%;
            -ms-animation: animationFrames ease 1.2s;
            -ms-animation-iteration-count: 1;
            -ms-transform-origin: 50% 50%
        }

        .element-animation4 {
            animation: animationFrames ease 1.4s;
            animation-iteration-count: 1;
            transform-origin: 50% 50%;
            -webkit-animation: animationFrames ease 1.4s;
            -webkit-animation-iteration-count: 1;
            -webkit-transform-origin: 50% 50%;
            -ms-animation: animationFrames ease 1.4s;
            -ms-animation-iteration-count: 1;
            -ms-transform-origin: 50% 50%
        }

        @keyframes animationFrames {
            0% {
                opacity: 0;
                transform: translate(-1500px, 0px)
            }

            60% {
                opacity: 1;
                transform: translate(30px, 0px)
            }

            80% {
                transform: translate(-10px, 0px)
            }

            100% {
                opacity: 1;
                transform: translate(0px, 0px)
            }
        }

        @-webkit-keyframes animationFrames {
            0% {
                opacity: 0;
                -webkit-transform: translate(-1500px, 0px)
            }

            60% {
                opacity: 1;
                -webkit-transform: translate(30px, 0px)
            }

            80% {
                -webkit-transform: translate(-10px, 0px)
            }

            100% {
                opacity: 1;
                -webkit-transform: translate(0px, 0px)
            }
        }

        .modal-header {
            background-color: transparent;
            color: inherit
        }

        .modal-body {
            min-height: 300px
        }
    </style>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'></script>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="container-fluid">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="pertanyaan">as</h3>
                </div>
                <div class="modal-body">
                    <div class="col-xs-3 5"></div>
                    <div class="quiz" id="quiz" data-toggle="buttons">
                        <div class="choice_a">
                            <label class=" btn btn-lg btn-danger btn-block" for="rd_a"><span class="btn-label"><i
                                        class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                    name="q_answer" value="1">HyperText Markup
                                Language.</label>
                        </div>
                        <div class="choice_b">
                            <label class=" btn btn-lg btn-danger btn-block" for="rd_b"><span class="btn-label"><i
                                        class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                    name="q_answer" value="2">HighText Markup
                                Language.</label>
                        </div>
                        <div class="choice_c">
                            <label class="btn btn-lg btn-danger btn-block" for="rd_c"><span class="btn-label"><i
                                        class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                    name="q_answer" value="2">HighText Markup
                                Language.</label>
                        </div>
                        <div class="choice_d">
                            <label class="btn btn-lg btn-danger btn-block" for="rd_c"><span class="btn-label"><i
                                        class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                    name="q_answer" value="2">HighText Markup
                                Language.</label>
                        </div>
                    </div>
                    <form id="formSubmit" method="POST" action="{{route('result.store')}}">
                        @method('POST')
                        @csrf
                    </form>
                </div>

            </div>

        </div>
    </div>
    <script type='text/javascript'>
        var resdata = @json($pertanyaan);
        var currIndex = 0;
        var jawaban = [];

        getSoal(currIndex)

        $('.choice_a').on("click", function() {
            jawaban[currIndex] = 'a'
            currIndex++
            getSoal(currIndex)
        });
        $('.choice_b').on("click", function() {
            jawaban[currIndex] = 'b'
            currIndex++
            getSoal(currIndex)
        });
        $('.choice_c').on("click", function() {
            jawaban[currIndex] = 'c'
            currIndex++
            getSoal(currIndex)
        });
        $('.choice_d').on("click", function() {
            jawaban[currIndex] = 'd'
            currIndex++
            getSoal(currIndex)
        });


        function getSoal(index) {
            if (index == resdata.length) {
                console.log(jawaban);
                $('#formSubmit').submit();
            } else {
                $(".pertanyaan").html(resdata[index].question);
                $('label[for=rd_a]').html(resdata[index].option_a);
                $('label[for=rd_b]').html(resdata[index].option_b);
                $('label[for=rd_c]').html(resdata[index].option_c);
                $('label[for=rd_d]').html(resdata[index].option_d);
            }

        }
    </script>
</body>

</html>

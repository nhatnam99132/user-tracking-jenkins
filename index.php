<!DOCTYPE html>
<html>
    <head>
        <title>User Tracking</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="jquery.min.js"></script>
        <style>
            html {
                font-family: helvetica, arial, sans-serif;
                background: rgba(10,22,40,0.9);
                color: rgba(255,255,255,0.95);

            }
            ::-webkit-scrollbar { 
                display: none; 
            }
            #wrapper {
                width: 92%;
                margin: 0 auto;
            }
            header h3 {
                margin-bottom: 0;
                width: 624px;
            }
            .title {
                float: left;
                width: 120px;
                height: 28px;
                line-height: 28px;
                font-size: 24px;
            }
            .session-actions-container {
                float: left;
                width: 644px;
            }
            .session, .actions, .history {
                margin-top: 20px;
            }
            .session {
                float: left;
                width: 480px;
                min-height: 632px;
                margin-right: 20px;
            }
            .session-data {
                float: left;
                height: 564px;
                width: 440px;
                padding: 20px;
                background-color: rgba(131, 109, 238, 0.9);
            }
            .session-data div {
                line-height: 26px;
                text-overflow: ellipsis;
                overfolow: hidden;
            }
            .session-data h5 {
                margin: 0;
            }
            .actions {
                float: left;
                width: 124px;
                height: 632px;
                margin-right: 20px;
            }
            .interactions, .conversions {
                float: left;
                width: 140px;
                height: 320px;
            }
            .interaction-buttons, .conversion-buttons, .interaction-data, .conversion-data {
                float: left;
            }
            .interaction, .conversion {
                float: left;
                width: 116px;
                height: 32px;
                margin-bottom: 10px;
                margin-right: 10px;
                cursor: pointer;
                line-height: 32px;
                padding-left: 8px;
            }
            .interaction {
                background-color: rgba(50, 112, 255, 0.9)
            }
            .conversion {
                background-color: rgba(94, 250, 59, 0.9);
            }
            #result {
                float: left;
                width: 55%;
                height: 632px;
                overflow: auto;
                
            }
            .history-data {
                background-color: rgba(124, 244, 199, 0.7);
                
            }
        </style>
     
        </script>
    </head>
    <body>
    <div class="session-actions-container">
                <div class="session">
                    <div class="title">
                        Session
                    </div>
                    
                    <div class="session-data">
                        <div class="page.title">
                            <span style="font-weight: bold;">Page Title:</span> <span data-bind="text: page.title"></span>
                        </div>
                        <div class="page.origin">
                            <span style="font-weight: bold;">Page Origin:</span> <span data-bind="text: page.origin"></span>
                        </div>
                        <div class="page.location">
                            <span style="font-weight: bold;">Page Location:</span> <span data-bind="text: page.location"></span>
                        </div>
                        <div class="page.href">
                            <span style="font-weight: bold;">Page HREF:</span> <span data-bind="text: page.href"></span>
                        </div>
                        <div class="language">
                            <span style="font-weight: bold;">Language:</span> <span data-bind="text: language"></span>
                        </div>
                        <div class="platform">
                            <span style="font-weight: bold;">Platform:</span> <span data-bind="text: platform"></span>
                        </div>
                        <div class="clientstart.name">
                            <span style="font-weight: bold;">Client Name on Load:</span> <span data-bind="text: clientStart.name"></span>
                        </div>
                        <div class="clientstart.innerWidth">
                            <span style="font-weight: bold;">Client Inner Width on Load:</span> <span data-bind="text: clientStart.innerWidth"></span>
                        </div>
                        <div class="clientstart.innerHeight">
                            <span style="font-weight: bold;">Client Inner Height on Load:</span> <span data-bind="text: clientStart.innerHeight"></span>
                        </div>
                        <div class="clientstart.outerWidth">
                            <span style="font-weight: bold;">Client Outer Width on Load:</span> <span data-bind="text: clientStart.outerWidth"></span>
                        </div>
                        <div class="clientstart.outerHeight">
                            <span style="font-weight: bold;">Client Outer Height on Load:</span> <span data-bind="text: clientStart.outerHeight"></span>
                        </div>
                        <div class="loadTime">
                            <span style="font-weight: bold;">Load Time:</span> <span data-bind="text: loadTime"></span>
                        </div>

                        <div class="unloadTime">
                            <span style="font-weight: bold;">Unload Time:</span> <span data-bind="text: unloadTime"></span>*
                        </div>
                        <div class="clientend.innerWidth">
                            <span style="font-weight: bold;">Client Inner Width on Unload:</span> <span data-bind="text: clientEnd.innerWidth"></span>*
                        </div>
                        <div class="clientend.innerHeight">
                            <span style="font-weight: bold;">Client Inner Height on Unload:</span> <span data-bind="text: clientEnd.innerHeight"></span>*
                        </div>
                        <div class="clientend.outerWidth">
                            <span style="font-weight: bold;">Client Outer Width on Unload:</span> <span data-bind="text: clientEnd.outerWidth"></span>*
                        </div>
                        <div class="clientend.outerHeight">
                            <span style="font-weight: bold;">Client Outer Height on Unload:</span> <span data-bind="text: clientEnd.outerHeight"></span>*
                        </div>
                        <h5>*Unload Session Data Simulated on Each Interaction</h5>
                    </div>
                </div>
                <div class="actions">
                    <div class="interactions">
                        <div class="title">
                            Interactions
                        </div>
                        <div class="interaction-buttons">
                            <div class="interaction">Đăng nhập</div>
                            <div class="interaction">Đăng ký</div>
                            <div class="interaction">Đăng xuất</div>
                            <div class="interaction">Quan tâm</div>
                            <div class="interaction">K quan tâm</div>
                            <div class="interaction">Liên hệ</div>
                            <div class="interaction">Thành Công</div>
                        </div>
                    </div>
                    <div class="conversions">
                        <div class="title">
                            Conversion
                        </div>
                        <div class="conversion-buttons">
                            <div class="conversion">Thất Bại</div>
                            <div class="conversion">Đánh giá</div>
                            <div class="conversion">Phỏng Vấn</div>
                            <div class="conversion">Xem CV</div>
                            <div class="conversion">Tải CV lên</div>
                            <div class="conversion">Quan tâm</div>
                            <div class="conversion">K quan tâm </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="history-data">
            <div id="result">
            <br>WELCOME USER TRACKING</br>
        </div>
            </div>
    </body>
    <script language="javascript" src="interactor.js"></script>
 
    <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.1/knockout-min.js"></script>
        <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.min.js"></script>
    <script>
       

            // Mobile Detection Method
            window.ismobile = function() {
                var mobile = false;
                (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
                return mobile;
            };

            // Setup Events by Device Type
            if (window.ismobile()) {
                var interactionEventsArray = ["touchend"],
                    conversionEventsArray = ["touchstart"];
            } else {
                var interactionEventsArray = ["mouseup"],
                    conversionEventsArray = ["mousedown"];
            }

            // Initialize Interactor
            var interactor = new Interactor({
                interactions            : true,
                interactionElement      : "interaction",
                interactionEvents       : interactionEventsArray,
                conversions             : true,
                conversionElement       : "conversion",
                conversionEvents        : conversionEventsArray,
                endpoint                : 'index.php',
                async                   : true,
                debug                   : true
            });

            // Empty Data Model for VM Initialization
            var model       = {
                interactions    : [
                    {
                        type            : "",
                        event           : "",
                        targetTag       : "",
                        targetClasses   : "",
                        content         : "",
                        clientPosition  : {
                            x               : 0,
                            y               : 0
                        },
                        screenPosition  : {
                            x               : 0,
                            y               : 0
                        },
                        createdAt       : ""
                    }
                ],
                conversions     : [
                    {
                        type            : "",
                        event           : "",
                        targetTag       : "",
                        targetClasses   : "",
                        content         : "",
                        clientPosition  : {
                            x               : 0,
                            y               : 0
                        },
                        screenPosition  : {
                            x               : 0,
                            y               : 0
                        },
                        createdAt        : ""
                    }
                ],
                loadTime        : "",
                unloadTime      : "",
                language        : "",
                platform        : "",
                port            : "",
                clientStart     : {
                    name            : "",
                    innerWidth      : 0,
                    innerHeight     : 0,
                    outerWidth      : 0,
                    outerHeight     : 0
                },
                clientEnd       : {
                    name            : "",
                    innerWidth      : 0,
                    innerHeight     : 0,
                    outerWidth      : 0,
                    outerHeight     : 0
                },
                page            : {
                    location        : "",
                    href            : "",
                    origin          : "",
                    title           : ""
                },
                endpoint        : ""
            };

            // Bind Interaction & Conversion Classes to VM Update
            var buttons = document.querySelectorAll(".interaction, .conversion");

            // Mapping for Interactions & Conversions Array
            var mapping = {
                'interactions': {
                    key: function (data) {
                        return ko.utils.unwrapObservable(data.id);
                    }
                },
                'conversions': {
                    key: function (data) {
                        return ko.utils.unwrapObservable(data.id);
                    }
                }
            }

            // Map ViewModel
            var viewmodel = ko.mapping.fromJS(model, mapping);

            // Apply Bindings
            ko.applyBindings(viewmodel, document.getElementById("wrapper"));

            // Init Session Data
            ko.mapping.fromJS(interactor.session, viewmodel);

            // Update View Model on Button Click
            var historydata = document.querySelector(".history-data");
            for(var i = 0; i < buttons.length; i++) {
                buttons[i].addEventListener("click", function (e) {
                    ko.mapping.fromJS(interactor.session, viewmodel);
                    //console.log(interactor.session);
                    $.ajax({
                    url : "interactions.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         interactions : interactor.session.interactions,
                         loadTime: interactor.session.loadTime,
                         unloadTime: interactor.session.unloadTime,
                         page: interactor.session.page,
                         clientStart: interactor.session.clientStart,
                         clientEnd: interactor.session.clientEnd,
                         platform: interactor.session.platform,
                         port: interactor.session.port,
                    },
                    success : function (result){
                       
                        $('#result').html(result);
                    }
                });
                    // historydata.style.display = "block";
                });
            }

        
    </script>
</html>
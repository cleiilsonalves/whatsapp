
<!-- <script
    src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
    integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
    crossorigin="anonymous"></script> -->
<?php
echo 'teste whats app';
?>



<!-- AdnersonFerro.com.br widget -->
<script type="text/javascript">
    (function () {
        var options = {
            //whatsapp: "+55(16)991690872", // WhatsApp number
             whatsapp: "+55(11)943432630", // WhatsApp number
            call_to_action: "Fale Conosco Agora!", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();

//     let number = '5511986586232'
// // // o texto ou algo vindo de um <textarea> ou <input> por exemplo
// let msg = 'Um texto qualquer'

// // // montar o link (apenas texto) (web)
//  let target = `https://api.whatsapp.com/send?text=${encodeURIComponent(msg)}`

// // // montar o link (número e texto) (web)
// // let target = 'https://api.whatsapp.com/send?phone=${encodeURIComponent(number)}&text=${encodeURIComponent(msg)}'

// // // montar o link (texto) (app)
// // let target 'whatsapp://send?text=${encodeURIComponent(msg)}'

// // // montar o link (número e texto) (app)
// // let target 'whatsapp://send?text=${encodeURIComponent(msg)}'

// Ao usar nosso site, você reconhece que leu e entendeu nossa Política de Cookies, Política de Privacidade e nossos Termos de Serviço.

 
let phone = document.getElementById('phone')
let message = document.getElementById('message')

// buttons
let linkHandler = document.getElementById('by-link')
let popUpHandler = document.getElementById('by-popup')

// font: 
let isMobile = (function(a) {
    if ( /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)) ) {
        return true
    } else {
        return false
    }
})(navigator.userAgent || navigator.vendor || window.opera)

const makeLink = function(mode) {

    let mount = function() {
        if ( isMobile ) {
            let target = `whatsapp://send?`
            if ( !!phone && phone.value !== '' ) {
                target += `phone=${encodeURIComponent(phone.value)}&`
            }
            if ( !!message && message.value !== '' ) {
                target += `text=${encodeURIComponent(message.value)}`
            }
            return target
        } else {
            let target = `https://api.whatsapp.com/send?`
            if ( !!phone && phone.value !== '' ) {
                target += `phone=${encodeURIComponent(phone.value)}&`
            }
            if ( !!message && message.value !== '' ) {
                target += `text=${encodeURIComponent(message.value)}`
            }
            return target
        }
    
    }

    let openLink = function() {
        $('#console-container').append(`<span class="col px-0"><b>Link</b>: ${mount()}</span><br><br>`)
    }

    let openPopUp = function() {
        let h = 650,
            w = 550,
            l = Math.floor(((screen.availWidth || 1024) - w) / 2),
            t = Math.floor(((screen.availHeight || 700) - h) / 2)
        // open popup
        let options = `height=600,width=550,top=${t},left=${l},location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=0`
        $('#console-container').append(`<span class="col px-0"><b>PopUp URL</b>: ${mount()}</span><br><span class="col px-0"><b>PopUp options</b>: ${options}</span><br><br>`)
    }
    
    switch (mode) {
        case 'link':
            openLink()
        break
        case 'popup':
            openPopUp()
        break
    }
} 




// events handler(s)
linkHandler.addEventListener('click', function(e) {
    makeLink('link')
}, false)
popUpHandler.addEventListener('click', function(e) {
    makeLink('popup')
}, false)

</script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>


<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet"/>


<!-- CONTAINER -->
<section class="container-fluid px-0 pt-5">

    <div class="col col-sm-8 col-md-5 col-lg-4 mx-auto px-0 mb-5">
        <form accept-charset="utf-8">
            <div class="form-group mb-2">
                <label>Phone (international)</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text rounded-0 fa fa-whatsapp"></span>
                    </div>
                    <input id="phone" type="phone" class="form-control rounded-0">
                </div>
            
            </div>
        
            <div class="form-group mb-2">
                <label>Message</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text rounded-0 fa fa-pencil-square-o"></span>
                    </div>
                    <input id="message" type="text" class="form-control rounded-0">
                </div>
            
            </div>
            
            <div class="form-group mb-2">
                <label>Enviar</label>
                <div class="col px-0">
                    <button id="by-link" type="button" class="btn btn-info">Link</button>
                    <button id="by-popup" type="button" class="btn btn-info">PopUp</button>
                 </div>
            </div>

        </form>
    </div>
    
    <div id="console-container" class="col col-sm-8 col-md-5 col-lg-4 mx-auto px-0 mb-5">
    
    
    </div>

</section>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"></script>

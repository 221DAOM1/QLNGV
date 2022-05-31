<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    messaging.requestPermission().then(() => {
        if (hasUserToken()) {
            console.log("token is saved")
        } else {
            getToken();
        }
    })

    function getToken() {
        messaging.getToken(messaging, {
            vapidKey: 'BP5GVQkxyTDhtPw24zr3jH2p-jUlM5kKukbVtNNTWjZ8xyT529Eluj7-tlERzdaeCpJbR4lPcmaFQWU1ly1P7Ck'
        }).then((currentToken) => {
            if (currentToken) {
                tokenToSever(currentToken);
            } else {
                // Show permission request UI
                console.log('No registration token available. Request permission to generate one.');
            }
        }).catch((err) => {
            console.log('An error occurred while retrieving token. ', err);
        });
    }

    function tokenToSever(currentToken) {
        // window.localStorage.setItem("userToken", currentToken);
        $.ajax({
            url: 'http://localhost/QLNGV/?act=userToken&xuli=addToken',
            method: 'post',
            data: 'token=' + currentToken
        }).done(function(result) {
            // console.log(result);
            window.localStorage.setItem("userToken", currentToken);
            window.location.href = '/QLNGV/'
        })
    }

    function hasUserToken() {
        // var userToken = window.localStorage.getItem('userToken');
        // if (userToken !== null) {
        //     return true;
        // }
        return false;
    }
</script>
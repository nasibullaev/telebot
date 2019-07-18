<?php
/**
 * Delete user file
 * 
 * @param $nomi name of user
 */
function del($nomi) {
    array_map('unlink', glob("step/$nomi.*"));
}

/**
 * Put file 
 * 
 * @param $fayl name of file
 */
function put($fayl, $nima){
    file_put_contents("$fayl", "$nima");
}

/**
 * Put user step
 * 
 * @param $cid user chat_id
 * 
 */
function pstep($cid,$zn){
    file_put_contents("step/$cid.step",$zn);
}

/**
 * Add step
 * 
 * @param $step user's step number 
 */
function step($cid){
    $step = file_get_contents("step/$cid.step");
    $step += 1;
    file_put_contents("step/$cid.step",$step);
}

/**
 * Put emoji 
 * 
 * @param $txt message emoji
 */
function nextTx($cid,$txt) {
    $step = file_get_contents("step/$cid.txt");
    file_put_contents("step/$cid.txt","$step\n\n$txt");
}

/**
 * Send Action
 * 
 * @param $ch User id
 * 
 * @return array
 */
function ty($ch) {
    return bot('sendChatAction', [
        'chat_id' => $ch,
        'action' => 'typing',
        ]);
    }
    
    /**
     * Setting of CallbackQuery
     * 
     * @param $text message text
     * 
     * @param $callbackQueryId callbackquery id 
     * 
     * @param $showalert show alert fumction
     */
    function ACL($callbackQueryId, $text = null, $showAlert = false) {
        return bot('answerCallbackQuery', [
            'callback_query_id' => $callbackQueryId,
            'text' => $text,
            'show_alert' => $showAlert,
            ]);
        }
        
        /**
         * Methos and datas
         * 
         * @param $method bot methods
         * 
         * @param $datas bots database
         */
        function bot($method,$datas=[]) {
            $url = "https://api.telegram.org/bot".API_KEY."/".$method;
            $ch = curl_init();
            
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
            
            $res = curl_exec($ch);
            
            if(curl_error($ch)){
                var_dump(curl_error($ch));
            }
            else {
                return json_decode($res);
            }
        }
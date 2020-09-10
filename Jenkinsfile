#!/usr/bin/groovy

pipeline {
    agent any
    stages {
        stage('Example') {
            steps {
                ftp_test()
                
            }
        }
    }

 
}

def ftp_test() {
    
   
                sh """  
dotest () {
#curl -O ftp://${ftp_server}/test_file --user ${l_ftp}:${p_ftp}
curl --max-time 3 -T test_file ftp://${ftp_server} --user ${l_ftp}:${p_ftp}
}

dook () {
curl --request 'POST' 'https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=ftp ok'
}

doerror () {
curl --request 'POST' 'https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=ftp error'
}

dotest && dook || doerror
"""
}

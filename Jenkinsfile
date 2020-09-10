#!/usr/bin/groovy

pipeline {
    agent any
    stages {
        stage('Example') {
            steps {
                ping_test()
                
            }
        }
    }

 
}

def ping_test() {
    
   
                sh """  
doping () {
#curl -O ftp://ftp.server/test_file --user user:pass #first run with the command to copy a test file from the server, then comment out or delete the command. then use the command to write the file to ftp
curl --max-time 3 -T test_file ftp://ftp.server --user user:pass
}

dook () {
curl --request 'POST' 'https://api.telegram.org/bot<TOKEN>/sendMessage?chat_id=<chat_id>&text=ftp ok'
}

doerror () {
curl --request 'POST' 'https://api.telegram.org/bot<TOKEN>/sendMessage?chat_id=<chat_id>&text=ftp error'
}

doping && dook || doerror
"""
}

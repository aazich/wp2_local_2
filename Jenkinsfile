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
curl --max-time 3 -T test_file ftp://ftp.uadreams.com --user admin:Bj6fxgbB803jhZtu
}

dook () {
curl --request 'POST' 'https://api.telegram.org/bot1003184229:AAF4OU035NoSesDxvBzWtS_5r2qNaBZbqCk/sendMessage?chat_id=491382846&text=ftp.uadreams.com ok'
}

doerror () {
curl --request 'POST' 'https://api.telegram.org/bot1003184229:AAF4OU035NoSesDxvBzWtS_5r2qNaBZbqCk/sendMessage?chat_id=491382846&text=ftp.uadreams.com error'
}

doping && dook || doerror
# this is the end of script.
                """
}

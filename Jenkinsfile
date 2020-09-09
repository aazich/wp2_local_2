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
ping -c3 ftp.uadreams.com > /dev/null
}

dook () {
#what to do if ping ok?
echo "ping ok"
curl -s --header 'Content-Type: application/json' --request 'POST' 'https://api.telegram.org/bot1003184229:AAF4OU035NoSesDxvBzWtS_5r2qNaBZbqCk/sendMessage?chat_id=491382846&text=ping ok'
}

doerror () {
# what to do if ping failed?
echo "error"
curl -s --header 'Content-Type: application/json' --request 'POST' 'https://api.telegram.org/bot1003184229:AAF4OU035NoSesDxvBzWtS_5r2qNaBZbqCk/sendMessage?chat_id=491382846&text=ping error'
}

doping && dook || doerror
# this is the end of script.
                """
               
       
}

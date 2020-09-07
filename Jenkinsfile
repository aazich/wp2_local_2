#!/usr/bin/groovy

pipeline {
    agent any
    options {
        disableConcurrentBuilds()
    }
 /*   parameters {
        string(name: 'Greeting', defaultValue: 'Hello', description: 'How should I greet the world?')
  }*/
    stages {
        stage('Example') {
            steps {
                //echo "${params.Greeting} World!"
                //k()
                ping_test()
                
            }
        }
    }
}

def k(){
    println new Date()   
}

def ping_test() {
    sh """
       doping () {
                 ping -c ftp.uadreams.com > /dev/null
}

       dook () {
                #what to do if ping ok?
                echo "ping ok"
                mail to: sergey-chasnyk@uadreams.com, subject: 'The ping ftp.uadreams.com ok :)'
}

       doerror () {
                  # what to do if ping failed?
                  echo "error"
                  echo "$(date) ping failed!" >> /var/log/network-fail.log
                  mail to: sergey-chasnyk@uadreams.com, subject: 'The ping ftp.uadreams.com failed :('
}

       doping && dook || doerror
       # this is the end of script.
       """
}

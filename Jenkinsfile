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
    
   def doping () {
               sh """  ping -c 3 ftp.uadreams.com > /dev/null"""
        }
      def  dook () {
                //what to do if ping ok?
               sh """ echo "ping ok" """
                //mail to: sergey-chasnyk@uadreams.com, subject: 'The ping ftp.uadreams.com ok :)'
       }
       def doerror () {
                  // what to do if ping failed?
                sh """  echo "error" """
               sh """   echo "$(date) ping failed!" >> /var/log/network-fail.log """
                  //mail to: sergey-chasnyk@uadreams.com, subject: 'The ping ftp.uadreams.com failed :('
       }
       doping && dook || doerror
       // this is the end of script.
       
}

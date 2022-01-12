pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        echo 'build code stage'
      }
    }

    stage('Test') {
      steps {
        echo 'Test stage'
      }
    }

    stage('Deploy') {
      steps {
        echo 'Deploy stage'
//         sh '''#!/bin/bash
// ssh -T -i /home/jenkins/key-pair.pem www-user@18.119.104.131 << EOF
// cd /var/www/html/demo
// git pull
// EOF'''
      }
    }

  }
}
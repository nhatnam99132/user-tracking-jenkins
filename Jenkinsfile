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
        sh '''#!/bin/bash
sudo su -
ssh -T -i /home/jenkins/key-pair.pem www-user@18.119.128.51 << EOF
cd /var/www/html/demo
git pull
EOF'''
      }
    }

  }
}
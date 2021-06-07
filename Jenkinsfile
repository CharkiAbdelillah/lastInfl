pipeline{
    agent any
    stages{
        stage('build'){
            steps{
                sh 'echo "hello word"'
                sh '''
                    echo "before the execute"
                    ls -la
                    whoami
                    hostname
                    cd /var/www
                    ls
                '''
            }
        }
        stage('run'){
            steps{
                sh '''
                    echo "runing comming"
		    echo "ls"
		    ls
		    cd /var/www/app3/laravel
                    php hello.php
                '''
            }
        }
        stage('deploy'){
            steps{
                sh '''
                 su jenkins
                ssh -tt abdo@20.98.160.69 -p 22
                hostname
                ls
                cd /var/www
                ls
                hostname
                '''
            }
        }
    }
}

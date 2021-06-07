pipeline{
    agent any
    stages{
        stage('build'){
            steps{
                sh 'echo "hello word branch master"'
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
        stage('deploy2'){
            steps{
                sh '''ssh abdo@10.0.0.4 -p 22"
                hostname
                ls
                cd /var/www
                ls"
                hostname
                '''
            }
        }
    }
}

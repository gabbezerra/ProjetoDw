# Projeto Samba
  O Samba é um "software servidor" para Linux (e outros sistemas baseados em Unix) que permite o gerenciamento e compartilhamento de recursos em redes formadas por computadores com o Windows.
 

## Objetivo
  -  Nosso projeto tem como objetivo principal implementar um serviço web para facilitar a configuração e uso do samba para compartilhamento de arquivos com uma interface amigável e de fácil uso para que, o usuario inexperiente quanto a comandos 
 shell, possa facilmento ultilizar o samba.

## Sistema Existente
 
 - Webmin SAMBA
  
      O Webmin é uma interface web para a administração do seu servidor, onde você pode configurar contas de usuário
    configurar servidores apache, servidores DNS e entre outros serviços. Nesse caso estamos utilizando o webmin como 
    base para criação da nossa interface web do servidor samba
  
![Alt Text](https://github.com/gabbezerra/ProjetoDw/blob/master/IMG_20022017_170226_0.png)



![Alt Text](https://github.com/gabbezerra/ProjetoDw/blob/master/IMG_20022017_170316_0.png)



![Alt Text](https://github.com/gabbezerra/ProjetoDw/blob/master/IMG_20022017_170538_0.png)


# Esboço De Tela
  - Exaltasamba

![Alt Text](https://github.com/gabbezerra/ProjetoDw/blob/master/Esboc%CC%A7o3.jpg)



# Comandos utilizados para instalação e configuração do samba
  
  - Instalação do samba
 
 ```
    apt-get install samba
 ```
 
 - Comando utilizado para dar permissão a pasta que você deseja compartilhar.   
  
  ```
    $ chmod +777 /{pasta-a-ser-compartilhada}
  ```
  
  - Basicamente as configurações do samba são feitas no arquivo smb.conf, e para realizar as configurações basta abrir o arquivo com alguma ferramenta de escrita como o pico, o nano, o vim ou qualquer editor de sua preferência. 
  
  ```
    $ vim /etc/samba/smb.conf
  ```
  
    ```
      [global] 
         workgroup = {nome-do-grupo} 
         security = {tipo-de-segurança} 
      [usuário] 
         writeable = {yes-no} 
         path = {local-da-pasta-compartilhada} 
         browseable = {yes-no} 
         valid users = {usuários-permitidos} 
    ```
  - Comandos utilizados para reinicialização do serviço samba
  
  ```
  $ service smbd restart
  ```
  
  ```
  $ service nmbd restart
  ```
  
  - Comando utilizado para criar o usuário no samba
  
  ```
  $ smbpasswd -a {nome-do-usuário} (para criar o usuário no samba)
  ```    

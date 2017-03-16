# Exaltasamba

O Samba é um "software servidor" para Linux (e outros sistemas baseados em Unix) que permite o gerenciamento e compartilhamento de recursos em redes formadas por computadores com o Windows.


## Objetivo

Nosso projeto tem como objetivo principal implementar um serviço web para facilitar a configuração e uso do samba para compartilhamento de arquivos com uma interface amigável e de fácil uso para que, o usuario inexperiente quanto a comandos shell, possa facilmento ultilizar o samba:

* adicionar pastas a serem compartilhadas com o windows
* garantir a segurança do compartilhamento

## Sistema Existente

Webmin SAMBA

O Webmin é uma interface web para a administração do seu servidor, onde você pode configurar contas de usuário
    configurar servidores apache, servidores DNS e entre outros serviços. Nesse caso estamos utilizando o webmin como
    base para criação da nossa interface web do servidor samba.

A**Figura 1** mostra a pagina inicial do webmin samba

*Figura 1 - Mostra as pastas compartilhadas e o acesso as configurações do samba
![Alt Text](/doc/img/IMG_20022017_170226_0.png)
Configuracoes de seguranca

![Alt Text](/doc/img/IMG_20022017_170316_0.png)


## Esboço De Tela

   - Tela da Login

![Alt Text](/doc/img/TelaLogin.png)

   - Tela inicial do programa, onde lista as pastas compartilhadas e o acesso as configuracoes.

![Alt Text](/doc/img/Tela1.png)

   - Configuracoes de Compartilhamento, onde configuraremos os usuarios, grupos e suas permissoes

![Alt Text](/doc/img/Comp.png)


# Instalação e configuração

## Comandos

### Instalação do samba

 ```
    apt-get install samba
 ```


### Criar o usuário no samba

  ```
  $ smbpasswd -a {nome-do-usuário} (para criar o usuário no samba)
  ```

### Permissão da pasta a ser compartilhada
  
  ```
    $ chmod +777 /{pasta-a-ser-compartilhada}
  ``` 

### Reiniciar o servidor samba

  ```
  $ service smbd restart
  ```

  ```
  $ service nmbd restart
  ```
  
## Configuração do arquivo

Basicamente as configurações do samba são feitas no arquivo smb.conf, e para realizar as configurações basta abrir o arquivo com alguma ferramenta de escrita como o pico, o nano, o vim ou qualquer editor de sua preferência.

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



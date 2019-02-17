Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/xenial64"
  config.vm.network :forwarded_port, guest: 22, host: 2203, id: "ssh" #ssh
  config.vm.network :forwarded_port, guest: 80, host: 8003 #web
  config.vm.network :forwarded_port, guest: 3306, host: 33603 #mysql
  config.vm.network :forwarded_port, guest: 1080, host: 10803 #maildev

  config.vm.provision :shell, path: "bootstrap.sh"

  config.vm.synced_folder ".", "/var/www/html", type: "rsync",
      rsync__exclude: [".idea", ".git/", "vendor/", "node_modules/", "var/cache", "web/public", "var/logs"]

  config.vm.hostname = "museum"
  config.vm.provider "virtualbox" do |vb|
    vb.memory = "2048"
    vb.cpus = "1"
  end
  config.ssh.forward_agent = true
end

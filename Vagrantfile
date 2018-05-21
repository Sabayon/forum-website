# -*- mode: ruby -*-
# vi: set ft=ruby :

installPath = "scripts/install.sh"

Vagrant.configure("2") do |config|
  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://vagrantcloud.com/search.
  config.vm.box = "ubuntu/xenial64"

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine and only allow access
  # via 127.0.0.1 to disable public access
  config.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"

  # Share an additional folder to the guest VM.
  # The first argument is the path on the host to the actual folder.
  # The second argument is the path on the guest to mount the folder.
  # And the optional third argument is a set of non-required options.
  config.vm.synced_folder "./src/", "/tmp/html"
  config.vm.synced_folder "./scripts/", "/tmp/scripts"

  if File.exists? installPath then
    config.vm.provision "shell", path: installPath
  end
end

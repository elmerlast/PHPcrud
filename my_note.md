# Docker 學習筆記

## 重要概念

### Dockerfile
是一個記載著環境配置的檔案。因此不管在何處都可以重新被建立。

### Docker compose
Docker compose是幫忙配置docker file完成環境建置的工具。



## 指令

`docker volume rm lamp_mysql-data`
移除某個特定volume

`docker volume ls`
列出所有docker已知的volume

`docker ps`
查看目前正在運作的容器(container)
&emsp;&emsp;`--all`
&emsp;&emsp;&emsp;&emsp;(列出所有曾執行過的容器)

`docker run CONTAINER_NAME IMAGE_NAME`
使用映像檔建立容器
&emsp;&emsp;`--publish HOST_RPORT:COTAINER_PORT`
&emsp;&emsp;（開啟外部連接埠，否則防火牆預設會擋下所有的連線）
&emsp;&emsp;`--detach`
&emsp;&emsp;（讓此容器在背景執行）
&emsp;&emsp;`--name`
&emsp;&emsp;（命名此容器，此後可使用此命名作爲此容器的代稱）

`docker-compose up`
執行docker compose指令
&emsp;&emsp;`-d`
&emsp;&emsp;(讓compose的動作背景執行。即- -detach的簡寫)

`docker-compose ps`
查看dockerfile中有宣告的容器列表


`docker-compose down`
停止所有由docker-compose up執行的容器


`docker build`
透過dockfile建置映像檔`
--network host`
(指定容器的網路配置模式)
`--file , -f`&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;`(指定執行建置動作時所使用的dockerfile，如目錄有名爲dockerfile的案時此參數可省略) 


## 好的答案就該從好的問題中出發

1. Dockerfile中， RUN描述執行的指令跟CMD描述所執行的指令有什麼不同呢？ 我在官方文件看到的描述，前者是在映像檔檔案系統中執行，另一個是在容器開始後執行，這兩者有何不同？
> 照我目前所看文件顯示，這兩者的差異的確就如我所想的，字面上的說法。

2. 這是我讀文件後所產生的感想。用我自已的話來說docker compose是決定每個容器如何互動運作，而docker file則是決定了


###### tags: `Docker`
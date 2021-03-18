
- 修改`mysql/conf/my.cnf` 的读写权限为`644`(本人wsl上开发,不易设置)

- `.env`和`phpSource/.env`中的数据库和redis配置应该保持一致

- `docker-compose up -d`

- 进入php容器`docker exec -it 容器ID /bin/bash`,安装依赖`composer install`

- 前后端代码放在同一个nginx中,前端目录

    - `js`
    - `css`
    - `image`
    - `index.html`

- 参考地址`https://www.yuque.com/bzsxmz/siuq1w/kggzna`



- 检查配置信息`.env`和`phpSource/.env`中的数据库与redis配置是否保持一致

- 运行容器`docker-compose up -d`

- 进入php容器`docker exec -it 容器ID /bin/bash`,安装依赖`composer install`

- 修改`phpSource/extend/service/FileService.php`的`getBaseUriLocal`方法

```php
    /**
     * 获取服务器URL前缀
     * @return string
     */
    public static function getBaseUriLocal()
    {
        $appRoot = request()->root(true);  // 去掉参数 true 将获得相对地址
        $uriRoot = preg_match('/\.php$/', $appRoot) ? dirname($appRoot) : $appRoot;
        $uriRoot = in_array($uriRoot, ['/', '\\']) ? '' : $uriRoot;
        // return "{$uriRoot}/"; // 
        return "http://nginx/";
    }
```
- 前后端代码放在同一个nginx中,前端目录如下

    - `js`
    - `css`
    - `image`
    - `index.html`

- [参考地址](https://www.yuque.com/bzsxmz/siuq1w/kggzna)

- 成功后访问地址[http://127.0.0.1/index.html](http://127.0.0.1/index.html)
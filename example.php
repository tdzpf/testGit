<?php
/**
 * @api {get} /appstock/app/mktHs/index 获取用户信息
 * @apiVersion 0.3.0
 * @apiName  获取用户信息
 * @apiGroup Group
 * @apiPermission 管理员
 *
 * @apiDescription 获取用户信息.
 *
 * @apiParam {Number} id The Users-ID.
 *
 * @apiExample 样例:
 * curl -i http://ifzq.gtimg.cn/appstock/app/mktHs/index
 *
 * @apiSuccess {Number}   id            The Users-ID.
 * @apiSuccess {Date}     registered    Registration Date.
 * @apiSuccess {Date}     name          Fullname of the User.
 * @apiSuccess {String[]} nicknames     List of Users nicknames (Array of Strings).
 * @apiSuccess {Object}   profile       Profile data (example for an Object)
 * @apiSuccess {Number}   profile.age   Users age.
 * @apiSuccess {String}   profile.image Avatar-Image.
 * @apiSuccess {Object[]} options       List of Users options (Array of Objects).
 * @apiSuccess {String}   options.name  Option Name.
 * @apiSuccess {String}   options.value Option Value.
 *
 * @apiError NoAccessRight Only authenticated Admins can access the data.
 * @apiError UserNotFound   The <code>id</code> of the User was not found.
 *
 * @apiErrorExample 样例:
 *     HTTP/1.1 401 Not Authenticated
 *     {
 *       "error": "NoAccessRight"
 *     }
 */
/**
 private note
 */
function getUser() { 
    echo "user info";
    return; 
}

/**
 * @api {post} /user 创建新用户
 * @apiVersion 0.3.0
 * @apiName PostUser
 * @apiGroup User
 * @apiPermission none
 *
 * @apiDescription 创建新用户
 *
 * @apiParam {String} name 用户名字.
 *
 * @apiSuccess {Number} id   The new Users-ID.
 *
 */
function postUser() { return; }

/**
 * @api {put} /user/:id 更新用户信息
 * @apiVersion 0.3.0
 * @apiName PutUser
 * @apiGroup User
 * @apiPermission none
 *
 * @apiDescription 更新用户信息
 *
 * @apiParam {String} name Name of the User.
 *
 */
function putUser() { return; }
?>

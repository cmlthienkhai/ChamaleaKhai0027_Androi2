const bcrypt = require('bcryptjs');

const users = [
    {
        id: 1,
        username: 'tk',
        password: '123456' 
    },
    {
        id: 2,
        username: 'tk1',
        password: '123456' 
    }
];

const findUserByUsername = (username) => {
    return users.find(user => user.username === username);
};

const comparePassword = (password, storedPassword) => {
    // So sánh mật khẩu trực tiếp
    return password === storedPassword;
};

module.exports = {
    findUserByUsername,
    comparePassword
};

const bcrypt = require('bcryptjs');

const users = [
    {
        id: 1,
        username: 'user1',
        password: '123456' 
    },
    {
        id: 2,
        username: 'user2',
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

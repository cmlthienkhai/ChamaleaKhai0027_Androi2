// ConfirmPaymentScreen.js
import React from "react";
import { StyleSheet, View, Text, Button } from "react-native";
import { useNavigation } from "@react-navigation/native"; 

const ConfirmPaymentScreen = () => {
    const navigation = useNavigation(); // Sử dụng hook useNavigation để có đối tượng navigation

    const handleGoHome = () => {
        
        navigation.navigate("Main");
    };

    return (
        <View style={styles.container}>
            <Text style={styles.successText}>Thanh toán thành công</Text>
            <Text style={styles.Text}>Cảm ơn đã mua hàng !</Text>
            <Button title="Gỏi hàng" onPress={handleGoHome} />

            {/* ... (các phần khác của màn hình xác nhận thanh toán) */}
        </View>
    );
};

const styles = StyleSheet.create({
    container: {
        flex: 1,
        justifyContent: "center",
        alignItems: "center",
        backgroundColor: "white",
        padding: 20,
    },
    successText: {
        fontSize: 24,
        fontWeight: "bold",
        marginBottom: 20,
        color: "blue", 
    },
    Text: {
        fontSize: 18,
        fontWeight: "bold",
        marginBottom: 20,
    },
    // Thêm các styles khác nếu cần
});

export default ConfirmPaymentScreen;

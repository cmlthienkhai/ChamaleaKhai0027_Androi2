// CheckoutScreen.js
import React, { useState, useEffect } from "react";
import { StyleSheet, View, Text, Button, TextInput, Image } from "react-native";
import { useNavigation } from '@react-navigation/native';
import { cleanCart } from '../cart/CartReducer';
import { useDispatch } from 'react-redux';
const CheckoutScreen = ({ route }) => {
    const navigation = useNavigation();
    const dispatch = useDispatch();
    const [paymentType, setPaymentType] = useState("card"); // Mặc định là thanh toán bằng thẻ ngân hàng
    const [cardNumber, setCardNumber] = useState("");
    const [expiryDate, setExpiryDate] = useState("");
    const [promoCode, setPromoCode] = useState("");
    const [totalBeforeDiscount, setTotalBeforeDiscount] = useState(0);
    const [totalAfterDiscount, setTotalAfterDiscount] = useState(0);
    const [qrCodeImage, setQrCodeImage] = useState(require('../assets/qr.jpg'));

    useEffect(() => {
        // Tính tổng giá dựa trên các mặt hàng trong giỏ hàng
        const cartItems = route.params.cart;
        const totalPriceBeforeDiscount = cartItems
            ?.map((item) => item.price * item.quantity)
            .reduce((curr, prev) => curr + prev, 0);

        // Giả sử có logic giảm giá nào đó ở đây, bạn có thể sửa đổi điều này nếu cần
        const discountPercentage = 10; // Ví dụ: giảm giá 10%
        const discountAmount = (discountPercentage / 100) * totalPriceBeforeDiscount;
        const totalPriceAfterDiscount = totalPriceBeforeDiscount - discountAmount;

        setTotalBeforeDiscount(totalPriceBeforeDiscount);
        setTotalAfterDiscount(totalPriceAfterDiscount);
    }, [route.params.cart]);

    const handleApplyPromoCode = () => {
        // Triển khai logic để xử lý mã khuyến mãi
        // Bạn có thể cập nhật TotalAfterDiscount tương ứng
    };

    const handlePayment = () => {
        switch (paymentType) {
            case "card":
                break;
            case "qrCode":
                setQrCodeImage(require('../assets/qr.jpg'));
                break;
            case "cashOnDelivery":
                break;
            default:
        }
        dispatch(cleanCart()); // Làm sạch giỏ hàng sau khi thanh toán
        navigation.navigate("Confirm");
    };

    return (
        <View style={styles.container}>
            <Text style={styles.heading}>Xác nhận thanh toán</Text>

            {/* Chọn loại thanh toán */}
            <View style={styles.paymentTypeContainer}>
                <Button
                    title="Thẻ ngân hàng"
                    onPress={() => setPaymentType("card")}
                    disabled={paymentType === "card"}
                />
                <Button
                    title="Mã QR"
                    onPress={() => setPaymentType("qrCode")}
                    disabled={paymentType === "qrCode"}
                />
                <Button
                    title="Khi nhận hàng"
                    onPress={() => setPaymentType("cashOnDelivery")}
                    disabled={paymentType === "cashOnDelivery"}
                />
            </View>

            {/* Hiển thị trường thông tin thanh toán tương ứng */}
            {paymentType === "card" && (
                <View style={styles.paymentFields}>
                    <Text style={styles.label}>Số thẻ ngân hàng</Text>
                    <TextInput
                        style={styles.input}
                        placeholder="Số thẻ"
                        value={cardNumber}
                        onChangeText={(text) => setCardNumber(text)}
                    />

                    <View style={styles.row}>
                        <View style={styles.column}>
                            <Text style={styles.label}>Ngày phát hành/hết hạn</Text>
                            <TextInput
                                style={styles.input}
                                placeholder="MM/YY"
                                value={expiryDate}
                                onChangeText={(text) => setExpiryDate(text)}
                            />
                        </View>

                    </View>
                </View>
            )}
            {paymentType === "qrCode" && (
                <View style={styles.qrCodeContainer}>
                    <Image source={qrCodeImage} style={{ width: 200, height: 200 }} />
                </View>
            )}

            {/* Mã giảm giá */}
            <View style={styles.promoCodeContainer}>
                <Text style={styles.label}>Mã giảm giá</Text>
                <TextInput
                    style={styles.input}
                    placeholder="Nhập mã giảm giá"
                    value={promoCode}
                    onChangeText={(text) => setPromoCode(text)}
                />
                <Button title="Áp dụng" onPress={handleApplyPromoCode} />
            </View>

            {/* Tổng giá và nút thanh toán */}
            <View style={styles.totalContainer}>
                <View style={styles.totalRow}>
                    <Text style={styles.label}>Tổng giá trước giảm giá :</Text>
                    <Text style={styles.price}>{totalBeforeDiscount} $</Text>
                </View>
                <View style={styles.totalRow}>
                    <Text style={styles.label}>Tổng giá sau giảm giá :</Text>
                    <Text style={styles.price}>{totalAfterDiscount.toFixed(2)} $</Text>
                </View>
                
                <Button title="Thanh toán" onPress={handlePayment} />
            </View>
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
    heading: {
        fontSize: 24,
        fontWeight: "bold",
        marginBottom: 20,
    },
    paymentTypeContainer: {
        flexDirection: "row",
        justifyContent: "space-around",
        marginBottom: 20,
    },
    paymentFields: {
        width: "100%",
        marginBottom: 20,
    },
    promoCodeContainer: {
        width: "100%",
        marginBottom: 20,
    },
    totalContainer: {
        width: "100%",
        alignItems: "center",
    },
    totalRow: {
        flexDirection: "row",
        justifyContent: "space-between",
        marginBottom: 10,
    },
    row: {
        flexDirection: "row",
        justifyContent: "space-between",
        marginBottom: 10,
    },
    column: {
        flex: 1,
        marginRight: 10,
    },
    label: {
        fontSize: 16,
        marginBottom: 5,
    },
    input: {
        height: 40,
        borderColor: "gray",
        borderWidth: 1,
        marginBottom: 15,
        paddingLeft: 10,
    },
    price: {
        fontSize: 18,
        fontWeight: "bold",
        color: "#C60C30",
    },
});

export default CheckoutScreen;

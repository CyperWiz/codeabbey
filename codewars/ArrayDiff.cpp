#include <iostream>
#include <vector>
#include <algorithm>

std::vector<int> array_diff(const std::vector<int>& a, const std::vector<int>& b) {
    std::vector<int> result;
    
    for (const int& value : a) {
        if (std::find(b.begin(), b.end(), value) == b.end()) {
            result.push_back(value);
        }
    }
    
    return result;
}

int main() {
    std::vector<int> a = {1, 2, 2, 2, 3};
    std::vector<int> b = {2};
    
    std::vector<int> z = array_diff(a, b);

    std::cout << "Resultado: ";
    for (const int& value : z) {
        std::cout << value << " ";
    }
    std::cout << std::endl;

    return 0;
}

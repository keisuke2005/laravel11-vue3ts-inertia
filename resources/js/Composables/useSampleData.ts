import { ref } from "vue";
//import { onMounted } from "vue";
import { SampleService } from "@/Services/SampleService";
import { SampleData } from "@/Types/SampleTypes";

export function useSampleData(initialData: SampleData[] = []) {
    const sampleData = ref<SampleData[]>(initialData); // トップページのデータ
    const isLoading = ref(false); // ローディング状態
    const error = ref<string | null>(null); // エラー情報

    const fetchSampleData = async () => {
        isLoading.value = true; // ローディング開始
        const service = new SampleService(); // サービスインスタンスを作成

        try {
            // サービスを使用してデータを取得
            sampleData.value = await service.getSampleData();
            error.value = null; // エラーをリセット
        } catch (err: unknown) {
            // エラー発生時にメッセージを設定
            console.error("エラーが発生しました:", err);
            error.value = "データ取得に失敗しました。";
        } finally {
            isLoading.value = false; // ローディング終了
        }
    };

    // 初期表示時にデータ取得
    // onMounted(() => {
    //     fetchSampleData();
    // });

    return {
        sampleData,
        isLoading,
        error,
        fetchSampleData,
    };
}
